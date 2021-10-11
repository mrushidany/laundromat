@extends('layouts.easywash.main')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <button type="button" class="btn btn btn-success btn-sm" onclick="event.preventDefault(); test_print()">Test Print</button>
        </div>

    </div>
@endsection

@section('scripts')
    <script type="application/javascript">
        function test_print(){
            window.print();
            {{--$.ajax({--}}
            {{--    url : '{{route('test_printing')}}',--}}
            {{--    type : 'POST',--}}
            {{--    headers : {--}}
            {{--        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')--}}
            {{--    }--}}
            {{--})--}}
        }
    </script>

@endsection
