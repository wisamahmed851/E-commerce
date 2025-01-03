<div>
    <h3>Receipt #{{ $transaction->id }}</h3>

    <!-- Transaction Information -->
    <p><strong>Payment Method:</strong> {{ ucfirst($transaction->payment_method) }}</p>
    <p><strong>Transaction ID:</strong> {{ $transaction->id }}</p>

    <table style="width:100%; border: 1px solid #ddd; margin-top: 20px; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Product Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Price</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Discount</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Final Price</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Quantity</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Total Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaction->details as $detail)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $detail->product->name }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">
                        {{ number_format($detail->price, 2) }}
                    </td>
                    <td style="border: 1px solid #ddd; padding: 8px;">
                        {{ number_format($detail->discount, 2) }}
                    </td>
                    <td style="border: 1px solid #ddd; padding: 8px;">
                        {{ number_format($detail->price - $detail->discount, 2) }}
                    </td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $detail->quantity }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">
                        {{ number_format(($detail->price - $detail->discount) * $detail->quantity, 2) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Total Cost for All Products -->
    <p style="margin-top: 20px;">
        <strong>Total Amount:</strong>
        {{ number_format($transaction->total_amount, 2) }}
    </p>

    <p style="margin-top: 20px;">Thank you for your transaction!</p>
</div>
