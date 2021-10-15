<div style="display:flex; justify-content:space-between; margin-bottom:20px; border-bottom: 1px solid black; padding:15px;">
    <span>LOGOPHARMA</span>
    <div>
        <a href="{{route('home')}}"> <span>Accueil</span> </a> |
        <a href="{{route('contact')}}"> <span>Contact</span> </a> |
        <a href="{{route('salespage')}}"> <span>Historique des ventes</span> </a>
    </div>
    <div style="display: flex;">
    <a href="{{ route('register') }}">Ajouter un employé</a> |
        <a href="{{route ('updated')}}"> <span>Mettre à jour votre profil</span> </a>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button>Se déconnecter</button>
        </form>

    </div>
    
    
</div>