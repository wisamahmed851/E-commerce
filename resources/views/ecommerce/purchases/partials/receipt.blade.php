<div>
    <h3>Receipt #{{ $purchase->id }}</h3>

    <!-- Product and Supplier Information -->
    <p><strong>Product Name:</strong> {{ $purchase->product->name }}</p>
    <p><strong>Supplier Name:</strong> {{ $purchase->supplier->name }}</p>
    <p><strong>Purchase ID:</strong> {{ $purchase->id }}</p>

    <table style="width:100%; border: 1px solid #ddd; margin-top: 20px; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Purchase Price</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ number_format($purchase->purchase_price, 2) }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Discount</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ number_format($purchase->discount, 2) }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Final Price</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ number_format($purchase->final_price, 2) }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Quantity</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $purchase->quantity }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Total Cost</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ number_format($purchase->total_cost, 2) }}</td>
        </tr>
    </table>

    <p style="margin-top: 20px;">Thank you for your purchase!</p>
</div>
