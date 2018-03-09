@extends('layouts.dashboard')

@section('content')
    <p>Add new Client</p>

    @if(!$errors->isEmpty())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    @isset($success)
        <div class="alert alert-success">{{ trans('index.user_adding') }}</div>
    @endisset

    <?php echo Form::open(['route' => 'AddNewClient']) ?>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="AddClientFirstName">First name</label>
                    <?php echo Form::text('first_name', null, ['id' => 'AddClientFirstName', 'class' => 'form-control', 'placeholder' => 'First name', 'required' => 'required']);?>
                </div>
                <div class="col">
                    <label for="AddClientLastName">Last name</label>
                    <?php echo Form::text('last_name', null, ['id' => 'AddClientLastName', 'class' => 'form-control', 'placeholder' => 'Last name', 'required' => 'required']);?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="AddClientPhone">Phone</label>
            <?php echo Form::text('phone', null, ['id' => 'AddClientPhone', 'class' => 'form-control', 'placeholder' => 'Phone', 'required' => 'required']);?>
        </div>
        <div class="form-group">
            <label for="AddClientEmail">Email address</label>
            <?php echo Form::text('email', null, ['id' => 'AddClientEmail', 'class' => 'form-control', 'placeholder' => 'example@domain.com', 'required' => 'required']);?>
        </div>
        <div class="form-group">
            <label for="AddClientactivity">Activity</label>
            <?php echo Form::text('activity', null, ['id' => 'AddClientactivity', 'class' => 'form-control', 'placeholder' => 'Activity']);?>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
    <?php echo Form::close(); ?>
@endsection