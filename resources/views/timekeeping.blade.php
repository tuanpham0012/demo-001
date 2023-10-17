@extends('layout')
@section('contend')
<div class="col-6">
    <h3 class="mt-3 mb-5">Lịch sử chấm công Nhân viên: {{ $employee->name}}</h3>
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ngày</th>
                <th scope="col">Thời gian</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee->timekeepings as $key => $item)
            <tr>
                <th scope="row">{{ $key + 1}}</th>
                <td>{{ $item->date}}</td>
                <td>
                    @foreach ($item->checked_in_at as $value)
                    <p>{{ $value }}</p>
                    @endforeach
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('script')

<script>
    function search() {
        var d = document.getElementById('search').value;
        window.location.href = "/employees?department_id=" + d;
    }

    function loaded() {
        var query = window.location.search;
        const urlParams = new URLSearchParams(query)
        const departmentId = urlParams.get('department_id');
        if(departmentId){
            document.getElementById('search').value = departmentId
        }
    }
</script>

@push('script')
