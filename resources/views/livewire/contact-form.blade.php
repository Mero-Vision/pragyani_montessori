<div>
    <form wire:submit.prevent="save" class="form-style3 layout2 ajax-contact">
        <div class="row justify-content-between">
            <div class="col-md-12 form-group">
                <label>
                    Full Name <span class="required">(Required)</span>
                </label>
                <input name="name" id="name" type="text" wire:model.live="name">
                 @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="col-md-6 form-group">
                <label>
                    Email Address <span class="required">(Required)</span>
                </label>
                <input name="email" id="email" type="email" wire:model.live="email">
                 @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <label>
                    Phone Number <span class="required">(Required)</span>
                </label>
                <input name="number" id="number" type="number" wire:model.live="phone_no">
                 @error('phone_no')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-12 form-group">
                <label>
                    Message <span class="required">(Required)</span>
                </label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message" wire:model.live="message"></textarea>
                 @error('message')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="col-auto form-group">
                <button class="vs-btn" type="submit">Send Message</button>
            </div>
            <p class="form-messages"></p>
        </div>
    </form>
</div>
