@extends('layouts.easywash.main')


@section('content')
    <div class="container-fluid">
        <div class="row ">
            <button type="button" class="btn btn btn-success btn-sm" onclick="event.preventDefault(); test_print()">Test Print</button>
        </div>

    </div>
@endsection

@section('scripts')
    <script type="application/javascript">

        function test_print(){
            var print_window = window.open('', 'PRINT');
            print_window.document.write('<html><head><title>Laundry Receipt</title>');
            print_window.document.write('</head><body style="text-align:center;font: Georgia, "Times New Roman", Times, serif;background: #fff;font-size: 16pt;margin:20px auto auto 50px;" >');
            print_window.document.write('<header style="text-align:center; white-space:nowrap;overflow:hidden;line-height: 1em;">' +
                '<p  style="font-size:10pt;white-space:nowrap;overflow:hidden;line-height: 12pt;">Laundry Receipt</p>' +
                '<p style="font-size:10pt;white-space:nowrap;overflow:hidden;line-height: 1em;">' + '<img src="{{asset('assets/images/easywash_web_logo.jpeg')}}" />' + '</p>' +
                '</header>');
            print_window.document.write('<content style="text-align:center;">' +
                '<p style="text-align:center; font-size: small">&copy EasyWash Laundromat</p>' +
                '');
            print_window.document.write('</body></html>');
            print_window.document.close(); // necessary for IE >= 10
            print_window.focus(); // necessary for IE >= 10*/
            print_window.print();
            print_window.close();
            return true;


            // window.print();
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
