<div>
    <form wire:submit.prevent="save" class="form-style3">
        <div class="row justify-content-between">
            <div class="col-md-6 form-group">
                <label>
                    Child's Name <span class="required">(Required)</span>
                </label>
                <input type="text" wire:model.live="child_name">
                @error('child_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <label>
                    Child's DOB <span class="required">(Required)</span>
                </label>
                <input type="date" wire:model.live="child_dob">
                 @error('child_dob')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <label>
                    Parent's Name <span class="required">(Required)</span>
                </label>
                <input type="text" wire:model.live="parent_name">
                 @error('parent_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <label>
                    Parent's Designation <span class="required">(Required)</span>
                </label>
                <input type="text" wire:model.live="parent_designation">
                 @error('parent_designation')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <label>
                    Email <span class="required">(Required)</span>
                </label>
                <input type="email" wire:model.live="email">
                 @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <label>Phone No</label>
                <input type="number" wire:model.live="phone_number">
                 @error('phone_number')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            
            <div class="col-auto form-group">
                <button class="vs-btn" type="submit">Apply Now</button>
            </div>
        </div>
    </form>
</div>
