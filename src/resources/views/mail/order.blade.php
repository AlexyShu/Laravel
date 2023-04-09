<? /**  @var \App\Models\User $user */ ?>
<? /**  @var \App\Models\Order $order */ ?>

Пользователь {{ $user->id }} заказал следующие товары: <br>

<br>
@forelse($order->goods as $good)
    {{ $good->id }} {{ $good->title }}
@empty
    Нет товаров в заказе
@endforelse
