@extends('layout')
@section('contend')
<div class="col-6">
    <h3 class="mt-3 mb-5"> Nhân viên</h3>
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <select class="form-select mb-3" id="search" onchange="search()">
        @foreach (renderDepartmenttoArray($departments->toArray()) as $key => $item)
        <option value={{ $item['id'] }}> {!! $item['content'] !!}</option>
        @endforeach
    </select>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Phòng ban</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $item)
            <tr>
                <th scope="row">{{ $key + 1}}</th>
                <td>{{ $item->name}}</td>
                <td>{{ $item->department ? $item->department->name : ''}}</td>
                <td>
                    <form action="/timekeepings" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="text" hidden name="employee_id" value="{{ $item->id }}" />
                        <button class="btn btn-success" type="submit">Điểm danh</button>
                    </form>
                </td>
                <td><a class="btn btn-info" href="/employees/{{ $item->id}}">Xem</a></td>
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
