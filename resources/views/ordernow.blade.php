@extends('master')
@section('content')
    <div class="custom-products">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>€{{ $total }}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>€0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>€10</td>
                </tr>
                <tr style="font-weight: bold;">
                    <td>Total amount</td>
                    <td>€{{ $total + 10 }}</td>
                </tr>
                </tbody>
            </table>
            <form action="/action_page.php">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Enter your address"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection
