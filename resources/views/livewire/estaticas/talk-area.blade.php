<div class="talk-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="talk-image" data-tilt>
                    <img src="{{ asset('assets/images/talk/talk.png') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="talk-content margin-zero">
                    <span>HABLEMOS</span>
                    <h3>Nuestro equipo regresará a usted en cuestión de horas <b>para ayudarlo.</b></h3>

                    <form wire:submit.prevent="enviar" id="contactFormTwo">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" id="nombresapellidos" value="{{ old('nombres') }}" wire:model="nombres" class="form-control @error('nombres') is-invalid @enderror " placeholder="Tu nombre" required />
                                    @error('nombres')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" id="correo" wire:model="correo" value="{{ old('correo') }}"  class="form-control @error('correo') is-invalid @enderror " required placeholder="Tu correo electrónico"/>
                                    @error('correo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" id="asunto" value="{{ old('asunto') }}" wire:model="asunto" class="form-control @error('asunto') is-invalid @enderror" required placeholder="Tu asunto" />
                                    @error('asunto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" id="telefono" value="{{ old('telefono') }}" wire:model="telefono" class="form-control @error('telefono') is-invalid @enderror" required placeholder="Tu teléfono" />
                                    @error('telefono')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control @error('mensaje') is-invalid @enderror"  wire:model="mensaje" id="mensaje" rows="4" required placeholder="Tu mensaje..">{{ old('mensaje') }}</textarea>
                                    @error('mensaje')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Enviar mensaje
                                    <div
                                    wire:loading wire:target="enviar"
                                    class="spinner-border spinner-border-sm"
                                    role="status"
                                    aria-hidden="true"
                                  ></div>
                                  </button>

                                  @if (session()->has('message'))
                                        <div class="text-success">
                                            <strong>{{ session('message') }}</strong>
                                        </div>
                                    @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>