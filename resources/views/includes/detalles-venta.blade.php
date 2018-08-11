<div class="col-md-4 col-sm-12 mt-4 resumen-compra" style="background-color: #fff;">
        <div class="col-12 mt-4">
            <div class="text-center">
                <p class="h3">Resumen de compra</p>
            </div>
        </div>
        <div class="col-12 tours-compra">
            <div>
                <?php /**/ $total = 0 /**/ ?>
                @foreach(Cart::content() as $tour)
                <div class="row datos-tour-resumen pb-3 mb-2">
                    <?php /**/ $total += $tour->options->total_sale /**/ ?>
                    <div class="col-5">
                        <img style="width: 100%;" src="{{ url('/img/tours')}}/{{ $tour->options->image }}" alt="tour" class="img-thumbnail">
                    </div>
                    <div class="col-7">
                        <p>{{$tour->name}}</p>
                        <p class="text-right">${{number_format($tour->options->total_sale,2,".",",")}}</p>
                    </div>
                </div>
                @endforeach
                <div class="col-12 text-right total-resumen mt-3">
                    <p>Su Pago: ${{number_format($total,2,".",",")}} USD</p>

                    @if(Request::path()=='confirmacion')
                        <a href="{{ route('payment') }}" class="btn btn-warning btn-lg btn-block mb-3">
                           Realizar pago <i class="fab fa-paypal"></i>
                        </a>
                    @else
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Continuar</button>
                    @endif
                </div>

            </div>
        </div>
    </div>
