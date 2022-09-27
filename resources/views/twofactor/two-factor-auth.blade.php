@extends('student.studentdashboard')
@section('student')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <section class="content">
            <div class="container-fluid">
<h2>ENABLE GOOGLE 2FA CODE HERE</h2>
<P style="color:red"><strong>Ensure you store your recovery codes safely.</strong></P>

@if ($errors->any())
    <div>
        <div>Something went wrong!</div>

        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status') == 'two-factor-authentication-enabled')
    <div class="mb-4 font-medium text-sm text-green-600">
        Two factor authentication has been enabled.
    </div>
@endif

@if (session('status') == 'two-factor-authentication-disabled')
    <div class="mb-4 font-medium text-sm text-green-600">
        Two factor authentication has been disabled.
    </div>
@endif

@if (auth()->user()->two_factor_secret)
    <div>
        {!! auth()->user()->twoFactorQrCodeSvg() !!}
    </div>
            <br>
    <div>
        @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
            <div>{{ $code }}</div>
        @endforeach
    </div>

    <div>
        <br>
        <form action="/user/two-factor-recovery-codes" method="POST">
            @csrf
            <div>
                <button  class="btn btn-warning"><strong>Regenerate Codes</strong></button>
                <br>
                <P style="color:blue"><strong>Click here to Regenerate a New Recovery code.<span style="color:red">***</span></strong></P>
            </div>
        </form>
    </div>
   
@endif

@if (! auth()->user()->two_factor_secret)
    <form action="/user/two-factor-authentication" method="POST">
        @csrf
        <div>
            <button class="btn btn-success"><strong>Enable Google Authentication.</strong></button>
        </div></div></div> </div></div></div>
    </form>
@else
    <form action="/user/two-factor-authentication" method="POST">
        @csrf
        @method('delete')
        <div>
            <button class="btn btn-danger"><strong>Disable Google Authentication.</strong></button>
        </div>
    </section>
</div>
</div>
</div>
    </form>
@endif

@endsection