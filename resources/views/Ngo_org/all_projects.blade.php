@extends('Ngo_org.main')

@section('content')
<h1>ALL PROJECTS</h1>

@if (count($pos)>0)



<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
        
            <th scope="col">Status</th>
            <th scope="col">Details</th>
           
          </tr>
        </thead>
      
        <tbody>
            <?php $a=1 
            
         
            ?>
                @foreach($pos as $pos)
          <tr>
                
          <th scope="row"><?php echo $a++ ?></th>
            <td>{{$pos->title}}</td>
     

          <td>
            {{$pos->status}}</td>


            <td> <a href="http://localhost/AdminPanel/public/projects/{{$pos->id}}">
              <button class="btn btn-primary">
                VIEW
              </button>
            </a>
          </td>


            <td>
              {!!Form::open(['action'=>['MedicalcampoController@destroy',$pos->id],'method'=>'post'])!!}



              {{Form::hidden('_method','DELETE')}}
              
              <button class="btn btn-danger ">
                     DELETE
                      </button>
              {!!Form::close()!!}
            </td>



            <td>
                <a href="http://localhost/AdminPanel/public/medicalcamp/{{$pos->id}}/edit">
                  <button class="btn btn-warning">
                   UPDATE
                  </button>
                </a>
               
            </td>


          </tr>
          @endforeach
        </tbody>
      </table>


@else
<p>NO DATA</p>
@endif


@endsection





       