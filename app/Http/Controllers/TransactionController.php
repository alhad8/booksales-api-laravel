<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Book;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // READ ALL - Admin only
    public function index()
    {
        $transactions = Transaction::with(['user', 'book'])->get();
        
        return response()->json([
            'success' => true,
            'message' => 'Data transaksi berhasil diambil',
            'data' => $transactions
        ], 200);
    }

    // CREATE - Authenticated customer
    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Get book data
        $book = Book::findOrFail($validated['book_id']);
        
        // Check stock
        if ($book->stock < $validated['quantity']) {
            return response()->json([
                'success' => false,
                'message' => 'Stok buku tidak mencukupi'
            ], 400);
        }

        // Calculate total amount
        $totalAmount = $book->price * $validated['quantity'];

        // Generate order number
        $orderNumber = 'ORD-' . str_pad(Transaction::count() + 1, 4, '0', STR_PAD_LEFT);

        // Create transaction
        $transaction = Transaction::create([
            'order_number' => $orderNumber,
            'customer_id' => auth()->id(),
            'book_id' => $validated['book_id'],
            'total_amount' => $totalAmount,
        ]);

        // Update book stock
        $book->decrement('stock', $validated['quantity']);

        $transaction->load(['user', 'book']);

        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil dibuat',
            'data' => $transaction
        ], 201);
    }

    // SHOW - Authenticated customer (own transaction only)
    public function show($id)
    {
        $transaction = Transaction::with(['user', 'book'])->find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        // Check if user owns this transaction
        if ($transaction->customer_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki akses ke transaksi ini'
            ], 403);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data transaksi berhasil diambil',
            'data' => $transaction
        ], 200);
    }

    // UPDATE - Authenticated customer (own transaction only)
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        // Check if user owns this transaction
        if ($transaction->customer_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki akses ke transaksi ini'
            ], 403);
        }

        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        // Get book data
        $book = Book::findOrFail($validated['book_id']);

        // Recalculate total amount (assuming quantity is 1 for simplicity)
        $transaction->update([
            'book_id' => $validated['book_id'],
            'total_amount' => $book->price,
        ]);

        $transaction->load(['user', 'book']);

        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil diupdate',
            'data' => $transaction
        ], 200);
    }

    // DELETE - Admin only
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil dihapus'
        ], 200);
    }
}