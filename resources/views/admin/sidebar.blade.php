<button class="btn btn-secondary w-9 absolute" type="button" data-bs-toggle="offcanvas" 
data-bs-target="#offcanvasScrolling" 
aria-controls="offcanvasScrolling"><x-sidebar></x-sidebar></button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" 
data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" 
aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Navegação</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" 
    aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="ml-2">
    <a href="{{url("dashboard")}}" class="p-3 text-black no-underline"><x-dashboard><x-texto>Painel de Controle</x-texto></x-dashboard></a>
    <a href="{{url("pacientes")}}" class="p-3 text-black no-underline"><x-paciente><x-texto>Pacientes</x-texto></x-paciente></a>
    <a href="{{url("medicos")}}" class="p-3 text-black no-underline"><x-medico><x-texto>Médicos</x-texto></x-medico></a>
    <a href="{{url("especialidades")}}" class="p-3 text-black no-underline"><x-espec><x-texto>Especialidades</x-texto></x-espec></a>
    <a href="{{url("planosdesaude")}}" class="p-3 text-black no-underline"><x-plano><x-texto>Planos de Saúde</x-texto></x-plano></a>
  </div>
  </div>
</div>

<button class="btn btn-secondary w-9 absolute" type="button" data-bs-toggle="offcanvas" 
data-bs-target="#offcanvasScrolling" 
aria-controls="offcanvasScrolling"><x-sidebar></x-sidebar></button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" 
data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" 
aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Navegação</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" 
    aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="ml-2">
    <a href="{{url("dashboard")}}" class="p-3 text-black no-underline"><x-dashboard><x-texto>Painel de Controle</x-texto></x-dashboard></a>
    <a href="{{url("pacientes")}}" class="p-3 text-black no-underline"><x-paciente><x-texto>Pacientes</x-texto></x-paciente></a>
    <a href="{{url("medicos")}}" class="p-3 text-black no-underline"><x-medico><x-texto>Médicos</x-texto></x-medico></a>
    <a href="{{url("especialidades")}}" class="p-3 text-black no-underline"><x-espec><x-texto>Especialidades</x-texto></x-espec></a>
    <a href="{{url("planosdesaude")}}" class="p-3 text-black no-underline"><x-plano><x-texto>Planos de Saúde</x-texto></x-plano></a>
  </div>
  </div>
</div>


<div class="absolute mt-5 bg-slate-300 w-9">
  <div class="ml-2">
    <a href="{{url("dashboard")}}" class="p-3 text-black no-underline"><x-dashboard></x-dashboard></a>
    <a href="{{url("pacientes")}}" class="p-3 text-black no-underline"><x-paciente></x-paciente></a>
    <a href="{{url("medicos")}}" class="p-3 text-black no-underline"><x-medico></x-medico></a>
    <a href="{{url("especialidades")}}" class="p-3 text-black no-underline"><x-espec></x-espec></a>
    <a href="{{url("planosdesaude")}}" class="p-3 text-black no-underline"><x-plano></x-plano></a>
  </div>
</div>