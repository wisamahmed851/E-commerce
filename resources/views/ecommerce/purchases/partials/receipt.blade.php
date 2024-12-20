<div>
    <h3>Receipt #{{ $purchase->id }}</h3>
    <p><strong>Purchase ID:</strong> {{ $purchase->id }}</p>
    <p><strong>Supplier ID:</strong> {{ $purchase->supplier_id }}</p>
    <p><strong>Product ID:</strong> {{ $purchase->product_id }}</p>

    <table style="width:100%; border: 1px solid #ddd; margin-top: 20px; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Purchase Price</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $purchase->purchase_price }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Discount</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $purchase->discount }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Final Price</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $purchase->final_price }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Quantity</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $purchase->quantity }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">Total Cost</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $purchase->total_cost }}</td>
        </tr>
    </table>

    <p style="margin-top: 20px;">Thank you for your purchase!</p>
</div>
