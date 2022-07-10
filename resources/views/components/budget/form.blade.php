<!-- The button to open modal -->
<label for="new-budget-modal" class="btn btn-outline btn-primary btn-xs">New budget</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="new-budget-modal" class="modal-toggle" />
<div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="font-bold text-lg mb-8">New budget</h3>
        <label for="new-budget-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <form method="POST" action="{{ route('budgets.store') }}">
            @csrf
            <div class="flex flex-col gap-4">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Enter name</span>
                    </label>
                    <label class="input-group">
                        <input name="name" type="text" placeholder="Budget name here" class="input input-bordered input-primary w-full max-w-xs"/>
                    </label>
                </div>

                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Enter amount</span>
                    </label>
                    <label class="input-group">
                        <input name="amount" type="text" placeholder="0.01" class="input input-bordered" />
                        <span class="material-symbols-outlined">
                            euro
                        </span>
                    </label>
                </div>

                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Select budget category</span>
                    </label>
                    <label class="input">
                        <select name="category_id" class="select select-bordered select-primary w-full max-w-xs">
                            <option disabled selected>Pick budget category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>

            <div class="modal-action">
                <button class="btn btn-outline btn-success">Create budget</button>
            </div>
        </form>
    </div>
</div>

