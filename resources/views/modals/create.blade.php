<div class="modal" id="clean">
    <form action="{{ route('order.create') }}" class="modal-window" method="post">
        @csrf
        <div class="close">&times;</div>
        <div class="modal-window__title">Регистрация заказа</div>
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="text" name="product_title" placeholder="{{ $product->title }}" value="{{ old('product_title') }}" class="modal-window__input" disabled>
        <input type="number" name="area" placeholder="Площадь" class="modal-window__input" value="{{ old('area') }}" min="1">
        <input type="date" name="date" placeholder="Выбрать дату" id="" value="{{ old('date') }}" class="modal-window__input">
        <input type="time" name="time" placeholder="Выбрать время" id="" value="{{ old('time') }}" class="modal-window__input">
        <div class="modal-window__total-price-container">
            <span class="modal-window__total-price-label">Итоговая цена:</span>
            <span class="modal-window__total-price" id="totalPrice">0 ₽</span>
        </div>
        <input type="hidden" name="total_price" value="">
        <input type="hidden" name="total_bonus" value="">
        <div style="display: flex; gap: 10px;align-items: center">
            <input type="checkbox" name="useBonus" id="useBonus">
            <label for="useBonus">Использовать бонусы:</label>
        </div>
        <button type="submit" class="modal-window__btn">Заказать</button>
    </form>
</div>
<script>
    const areaInput = document.querySelector('input[name="area"]');
    const totalPriceSpan = document.getElementById('totalPrice');
    const productPrice = {{ $product->price }};
    let bonus = {{ auth()->user()->bonus }};
    const totalInput = document.querySelector('input[name="total_price"]');
    const totalBonusInput = document.querySelector('input[name="total_bonus"]');
    const useBonusCheckbox = document.getElementById('useBonus');

    areaInput.addEventListener('input', calculateTotalPrice);
    useBonusCheckbox.addEventListener('change', calculateTotalPrice); // Add event listener to bonus checkbox

    function calculateTotalPrice() {
        const area = parseFloat(areaInput.value) || 0;
        let totalPrice = area * productPrice;
        const maxBonusToUse = totalPrice * 0.2; // Максимально возможный бонус, который можно использовать

        if (useBonusCheckbox.checked && bonus > 0) {
            const availableBonus = Math.min(bonus, maxBonusToUse); // Ограничиваем бонус до максимально возможного
            totalPrice -= availableBonus;
            totalBonusInput.value = availableBonus.toFixed(0); // Обновляем использованный бонус и округляем до 2 знаков после запятой
        } else {
            totalBonusInput.value = 0; // Бонусы не используются
        }

        totalPriceSpan.textContent = totalPrice.toFixed(0) + ' ₽'; // Округляем итоговую цену до 2 знаков после запятой
        totalInput.value = totalPrice.toFixed(0); // Округляем итоговую цену до 2 знаков после запятой
    }

</script>
