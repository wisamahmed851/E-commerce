<div>
    <h3>Receipt #{{ $purchase->id }}</h3>

    <!-- Supplier Information -->
    <p><strong>Supplier Name:</strong> {{ $purchase->supplier->name }}</p>
    <p><strong>Purchase ID:</strong> {{ $purchase->id }}</p>

    <table style="width:100%; border: 1px solid #ddd; margin-top: 20px; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Product Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Purchase Price</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Discount</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Final Price</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Quantity</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Total Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($purchase->products as $product)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $product->product->name }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ number_format($product->purchase_price, 2) }}
                    </td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ number_format($product->discount, 2) }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ number_format($product->final_price, 2) }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $product->quantity }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ number_format($product->total_cost, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Total Cost for All Products -->
    <p style="margin-top: 20px;">
        <strong>Total Cost:</strong>
        {{ number_format($purchase->products->sum('total_cost'), 2) }}
    </p>

    <p style="margin-top: 20px;">Thank you for your purchase!</p>
</div>
