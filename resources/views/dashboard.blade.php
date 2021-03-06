<x-app-layout>
    <x-slot name="slot">
        <div>
            @if (session('success'))
                <div class="alert alert-success shadow-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif
            @error('name')
            <div class="alert alert-error shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>{{ $message }}</span>
                </div>
            </div>
            @enderror
        </div>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="link link-primary mx-2">Logout</button>
                </form>
            @endif
        </div>
            <div class="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-center py-24 px-8 mx-auto">

                <div class="grid grid-cols-1 gap-4 place-content-stretch ml-auto mr-0 min-w-full">
                    <div class="card flex flex-col justify-between p-4 outline outline-primary rounded-lg">
                        <div class="collapse">
                            <input type="checkbox"/>
                            <h3 class="collapse-title card-title">Transactions</h3>
                            <div class="collapse-content">
                                <x-transaction.detail :transactions="$transactions" :categories="$categories"/>
                            </div>
                        </div>
                        <x-transaction.form :categories="$categories"/>
                    </div>

                    <div class="card flex flex-col justify-between p-4 outline outline-primary rounded-lg">
                        <div class="collapse">
                            <input type="checkbox"/>
                            <h3 class="collapse-title card-title">Recurrent transactions</h3>
                            <div class="collapse-content">
                                <x-recurrent.detail :recurrents="$recurrents" :categories="$categories"/>
                            </div>
                        </div>
                        <x-recurrent.form :categories="$categories"/>
                    </div>
                </div>


                <div class="card p-4 outline outline-primary rounded-lg w-auto row-start-1 md:col-start-2">
                    <x-total.actual :budgets="$budgets" :totals="$totals"/>
                </div>

                <div class="grid grid-cols-1 gap-4 place-content-stretch mx-auto ml-0 min-w-full">
                    <div class="card flex flex-col justify-between p-4 outline outline-primary rounded-lg">
                        <div class="collapse">
                            <input type="checkbox"/>
                            <h3 class="collapse-title card-title">Budgets</h3>
                            <div class="collapse-content">
                                <x-budget.detail :budgets="$budgets" :categories="$categories"/>
                            </div>
                        </div>
                        <x-budget.form :categories="$categories"/>
                    </div>

                    <div class="card flex flex-col justify-between p-4 outline outline-primary rounded-lg">
                        <div class="collapse">
                            <input type="checkbox"/>
                            <h3 class="collapse-title card-title">Categories</h3>
                            <div class="collapse-content">
                                <x-category.detail :categories="$categories"/>
                            </div>
                        </div>
                        <x-category.form/>
                    </div>
                </div>
            </div>
{{--            <div class="m-8 p-4 w-1/2 outline outline-primary rounded-lg flex flex-col gap-2">--}}
{{--                <x-chart.bar :test="$chart_data"/>--}}
{{--            </div>--}}
    </x-slot>
</x-app-layout>
