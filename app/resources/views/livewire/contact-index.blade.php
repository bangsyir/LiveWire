<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session("message")}}
        </div>
    @endif
    
    @if($statusUpdate)
    <livewire:contact-update></livewire:contact-update>
    @else 
    <livewire:contact-create></livewire:contact-create>
    @endif
    
    <div class="row">
        <div class="col-2">
            <select wire:model="paginate" name="" id="" class="form-control form-control-sm">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col">
            <div class="form-group">
                <input wire:model="search" type="text" class="form-control form-control-sm" placeholder="Search">
            </div>
        </div>
    </div>
    
    <table class="table">
        <thead class="bg-dark text-light">
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($contacts as $item)
            <?php $no++;?>
            <tr>
            <th scope="row">{{$no}}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->phone }}</td>
            <td class="d-flex">
                <button wire:click="getContact({{$item->id}})" class="btn btn-success btn-sm">Edit</button>
                <button wire:click="destroy({{$item->id}})" class="btn btn-danger btn-sm">Delete</button>
            </td>
            </tr>
            @endforeach
            
        </tbody>
        </table>
        {{$contacts->links()}}
</div>
