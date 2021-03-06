@extends('admin.layout.admin')

@section('title', 'Authors')

@section('pageTitle', 'Authors')

@section('content')


    @if(!empty($posts ))  

        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Authors</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <form action="{{ route('authorSearch') }}" method="get">
                                <input type="text" id="search" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                <table class="table table-hover">

                    <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Birthdate</th>
                    <th>Death Date</th>
                    <th>Biography</th>
                    <th>External Link</th>
                    <th>Actions</th>
                    </tr>

                    @foreach($posts as $author)
                    <tr>
                        <td width="5%">{{ $author->id }}</td>
                        <td width="10%">{{ $author->name }}</td>
                        <td width="10%">{{ $author->bd }}</td>
                        <td width="10%" >{{ $author->deathdate }}</td>
                        <td width="25%">{{ str_limit($author->bio,100) }}</td>
                        <td width="5%">{{ str_limit($author->externalLink, 40) }}</td>
                        <td>
                            <a href="{{ route('author.show',$author->id) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-info-circle"></i></a>
                            
                            <a href="{{ route('author.edit',$author->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>

                            {!! Form::open(['method' => 'DELETE', 
                                            'route' => ['author.destroy', $author->id] ,
                                            'style' => 'display:inline',
                                            'onsubmit' => "return confirm('Are you Sure?')" ]) !!}

                                {{ Form::button('<i class="fa fa-trash-alt"></i>', 
                                                ['type' => 'submit', 
                                                'class' => 'btn btn-outline-danger btn-sm'] )  }}

                            {!! Form::close() !!}

                        </td>
                    </tr>
                    @endforeach

                </table>
                </div>

            </div>

            <div class="pagination justify-content-center">
            <?php //echo $authors->render(); ?>
            </div>

        </div>
    
    @else  
        <?php echo 'Data Not Found'; ?>
    @endif

@endsection