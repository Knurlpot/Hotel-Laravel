<div id="checkoutModal" class="modal-overlay">
    <div class="modal-box">

        <button class="close-btn" onclick="closeCheckout()">✕</button>

        <h3>🛒 CHECKOUT COUNTER</h3>
        <p><strong>Single Bedroom</strong></p>

        <div class="checkout-grid">

            {{-- Calendar --}}
            <div class="calendar-box">
                <p><strong>December 2025</strong></p>
                <table class="calendar">
                    <tr>
                        <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th>
                        <th>Thu</th><th>Fri</th><th>Sat</th>
                    </tr>
                    <tr>
                        <td></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td>
                    </tr>
                    <!-- shortened for clarity -->
                </table>
            </div>

            {{-- Summary --}}
            <div class="summary-box">
                <p><strong>Check In:</strong> December 28, 2025</p>
                <p><strong>Check Out:</strong> December 30, 2025</p>

                <hr>

                <p class="total">GRAND TOTAL</p>
                <h2>₱ 2,618</h2>

                <button class="btn-primary full">Book Now</button>
            </div>

        </div>
    </div>
</div>
