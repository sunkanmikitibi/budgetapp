@extends('layouts.oculux')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools float-right ">
                        <a href="{{ route('member.create')}}" class="btn btn-round btn-info btn-sm btn-block mb-2">
                            <i class="icon-user-follow"></i>
                            Add New
                        </a>
                        </div>
                    All Members

                </div>
                <div class="card-body table-responsive">
                   <table class="table table-striped table-hover dataTable js-exportable">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Income Category</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Firstname</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Income Category</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>

                        </tr>
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
