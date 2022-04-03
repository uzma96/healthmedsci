@extends('journal.layout')
@section('css')
<style>
    .q{
        font-weight: bold;
        color: red;
        font-size: 19px;
        margin-bottom: 5px;
    }
.ans{
    color:#074c93;
}
</style>
@stop
@section('content')
    <div class="faq">
        <div class="container">
            <h3 class="typo_w3_agile_head">FAQ</h3>
            <hr>
            <div class="w3l_faq_grids">
                <div class="agileits_technical_research">
                    {{-- <h3><i class="fa fa-bar-chart" aria-hidden="true"></i>research</h3> --}}
                    <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="q">1. Demo Question ?</div>
                        <div class="ans">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis delectus repellat minima, eaque, facere tenetur iste temporibus! Odio, aliquid blanditiis doloribus, eum nisi consequuntur. Nostrum alias adipisci maxime placeat consectetur?
                        </div>
                        <hr>
                        <div class="q">2. Demo Question ?</div>
                        <div class="ans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio similique, totam architecto culpa magnam id consequatur quasi commodi sit, excepturi reprehenderit doloribus temporibus corporis enim sunt impedit itaque soluta ducimus.</div>
                        <hr>
                        <div class="q">3. Demo Question ?</div>
                        <div class="ans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio similique, totam architecto culpa magnam id consequatur quasi commodi sit, excepturi reprehenderit doloribus temporibus corporis enim sunt impedit itaque soluta ducimus.</div>
                        <hr>
                        <div class="q">4. Demo Question ?</div>
                        <div class="ans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio similique, totam architecto culpa magnam id consequatur quasi commodi sit, excepturi reprehenderit doloribus temporibus corporis enim sunt impedit itaque soluta ducimus.</div>
                        <hr>
                        <div class="q">5. Demo Question ?</div>
                        <div class="ans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio similique, totam architecto culpa magnam id consequatur quasi commodi sit, excepturi reprehenderit doloribus temporibus corporis enim sunt impedit itaque soluta ducimus.</div>
                        <hr>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop