Bonjour <strong>{{ $user->nom }}  {{ $user->prenom}} </strong>,


<p>Merci pour le temps que vous nous accorder</p>

<p>Nous venons de recevoir une alerte un besoin de sang de type {{$alert->groupe_sanguin}} </p>

<p> le numero a contacter est {{$alert->tel}}  et la personne se trouve a {{$alert->position}} dans la ville de {{$alert->ville}} </p>

<p> le demandeur nous charge de vous transferer se message:</p>
<p> "{{$alert->message}}"</p>

<p>merci pour votre disponiblite</p>

<p>5mn pour sauver une vies</p>
