@extends('template')

@section('content')
    <h3 class="page-header text-center">Pico y Placa</h3>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Results for plate: <b>{{ $entirePlate }}</b></h2>
            <a href="{{ route('plate') }}" class="btn btn-warning">New consult</a>
        </div>
        <div class="panel-body">
             <div class="row">
                 <div class="col-sm-12 col-lg-12">
                     @if(isset($allowMsg))
                         <h3 class="text-center">
                             <label class="label label-success">You can drive {{ $date }} at {{ $time }}</label>
                         </h3>
                         @elseif(isset($denyMsg))
                         <h3 class="text-center">
                             <label class="label label-danger">You can not drive {{ $date }} at {{ $time }}</label>
                         </h3>
                     @endif
                 </div>
             </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h4 class="text-center">¡Look at this info, it should be very helpful!</h4>
                    <table class="table table-bordered">
                        <tr>
                            <td bgcolor="#337AB7">&nbsp;</td>
                            <td bgcolor="#337AB7">&nbsp;</td>
                            <td bgcolor="#337AB7"><p class="text-center" style="color: #fff;">Day Restrictions</p></td>
                            <td bgcolor="#337AB7">&nbsp;</td>
                            <td bgcolor="#337AB7">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Monday <br>1 and 2</td>
                            <td>Tuesday <br>3 and 4</td>
                            <td>Wednesday <br>5 and 6</td>
                            <td>Thursday <br>7 and 8</td>
                            <td>Friday <br>9 and 0</td>
                        </tr>
                        <tr>
                            <td bgcolor="#337AB7">&nbsp;</td>
                            <td bgcolor="#337AB7">&nbsp;</td>
                            <td bgcolor="#337AB7"><p class="text-center" style="color: #fff;">Time Restrictions</p></td>
                            <td bgcolor="#337AB7">&nbsp;</td>
                            <td bgcolor="#337AB7">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Mornig <br>07:00 - 09:30</td>
                            <td>&nbsp;</td>
                            <td>Evening <br>16:00 - 19:30</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop