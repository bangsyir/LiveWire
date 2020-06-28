<div>
    <form wire:submit.prevent="store" class="pb-5">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <label for="name">Name</label>
                    <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name">
                    @error('name')
                        <span class="invalid-feedback">
                            <small class="font-weight-bold">{{$message}}</small>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <label for="phone">Phone</label>
                    <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="phone">
                    @error('phone')
                        <span class="invalid-feedback">
                            <small class="font-weight-bold">{{$message}}</small>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
