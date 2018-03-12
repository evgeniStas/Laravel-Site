@extends('layouts.dashboard')

@section('content')
    <p>Add</p>
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
    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link active" href="#">First step</a>
        <a class="nav-item nav-link" href="#">Second step</a>
        <a class="nav-item nav-link" href="#">Finish step</a>
    </nav>
    <div class="alert alert-light" role="alert">
        <h3>Choose client</h3>
        <select class="custom-select">
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
            @endforeach
        </select>
        <div>
            <button id="newClientBtn" class="btn btn-link">Add new client</button>
                <div id="newClientDiv" style="display: none;">
                    <h3>Add new client</h3>
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
                    <button type="submit" class="btn btn-primary btn-lg">Add new client</button>
                    <?php echo Form::hidden('AddOrder', "1");?>
                    <?php echo Form::close(); ?>
            </div>
        </div>
        <h3>Choose category</h3>
        <ul class="nav nav-pills nav-fill">
            @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ $category->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection