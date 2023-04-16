<x-app-layout>
    <div>
        <form action="{{ route('admin.reservation.updateStatus', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="status">Trạng thái:</label>
            <select name="status" id="status">
                <option value="pending" {{ $reservation->status == 'pending' ? 'selected' : '' }}>Chờ xác nhận</option>
                <option value="confirmed" {{ $reservation->status == 'confirmed' ? 'selected' : '' }}>Đã xác nhận</option>
                <option value="canceled" {{ $reservation->status == 'canceled' ? 'selected' : '' }}>Đã hủy</option>
            </select>
            <button type="submit">Cập nhật trạng thái</button>
        </form>
    </div>
</x-app-layout>