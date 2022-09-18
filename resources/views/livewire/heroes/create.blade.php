<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add Hero</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Hero Name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='damage'>
             <label for="damage">Damage</label>
             @error('damage')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="type" class="form-select" wire:model.defer='type'>
             <option hidden="true">Select type</option>
             <option selected disabled>Select type</option>
             <option value="Love">Mage</option>
             <option value="Death">Strength</option>
             <option value="Action">Intellegence</option>
             <option value="Horror">Agility</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addHero()'>
                 Add Hero
             </button>
          </div>
     </div>
    </div>
 </div>
