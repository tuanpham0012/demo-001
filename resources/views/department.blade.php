@extends('layout')
@section('contend')
<div class="col-4">
    <!-- {!! renderDepartmentHtml($departments->toArray()) !!} -->
    <h3 class="mt-3 mb-5"> Bộ phận</h3>
    <table class="table ">
        <tbody>
            @foreach (renderDepartmenttoArray($departments->toArray()) as $item )


            <tr>
                <td class="col-3"> {!! $item['content'] !!}</th>
                <td class="col-1"> <a href={{ '/departments/down/' . $item["id"] }}   class="btn btn-sm"><span class="material-symbols-outlined">
                        expand_more
                    </span></a> </th>
                <td class="col-1"> <a href={{ '/departments/up/' . $item["id"] }} class="btn btn-sm"><span class="material-symbols-outlined">
                        expand_less
                    </span></a> </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('script')

<script>

</script>

@push('script')