@extends('templates/main_layout')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h4>Editar Tarefa</h4>
            <hr>

            <form action="{{route('edit_task_submit')}}" method="post">
                @csrf

                <input type="hidden" name="task_id" value="{{Crypt::encrypt($task->id)}}">

                {{-- task name --}}
                <div class="mb-3">
                    <label for="text_task_name" class="form-label">Nome da tarefa</label>
                    <input type="text" name="text_task_name" id="text_task_name" class="form-control" placeholder="Nome da tarefa" required value="{{old('text_task_name', $task->task_name)}}">
                    @error('text_task_name')
                        <div class="text-warning">{{$errors->get('text_task_name')[0]}}</div>
                    @enderror
                </div>

                {{-- task description --}}
                <div class="mb-3">
                    <label for="text_task_description" class="form-label">Descrição da tarefa</label>
                    <textarea name="text_task_description" id="text_task_description" class="form-control" rows="5" required>{{old('text_task_description', $task->task_description)}}</textarea>
                    @error('text_task_description')
                        <div class="text-warning">{{$errors->get('text_task_description')[0]}}</div>
                    @enderror
                </div>

                {{-- task status --}}
                <div class="mb-3">
                    <label for="text_task_status" class="form-label">Status da Tarefa</label>
                    <select name="text_task_status" id="text_task_status" class="form-select w-25" required>
                        <option value="new" {{old('text_task_status', $task->task_status) == 'new' ? 'selected' : ''}}>Nova</option>
                        <option value="in_progress" {{old('text_task_status', $task->task_status) == 'in_progress' ? 'selected' : ''}}>Em Progresso</option>
                        <option value="cancelled" {{old('text_task_status', $task->task_status) == 'new' ? 'cancelled' : ''}}>Cancelada</option>
                        <option value="completed" {{old('text_task_status', $task->task_status) == 'completed' ? 'selected' : ''}}>Concluída</option>
                    </select>
                </div>


                {{-- cancel or submit --}}
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-secondary px-5 m-1"><i class="bi bi-floppy me-2"></i>Guardar</button>
                    <a href="{{route('index')}}" class="btn btn-dark px-5 m-1"><i class="bi bi-x-circle me-2"></i>Cancelar</a>
                </div>
            </form>
            
            @if(session()->has('task_error'))
                <div class="alert alert-danger text-center p-1">
                    {{session()->get('task_error')}}
                </div>
            @endif

        </div>
    </div>
</div>
    
@endsection