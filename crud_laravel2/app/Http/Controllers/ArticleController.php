<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function liste_article(){
        $articles= Article ::All();
       return view('mes_articles.liste',compact('articles'));
    }

    public function ajouter_article(){
        
        return view('mes_articles.ajouter');
    }

    // public function article_traitement(Request $request){
    //     // $request->validate([
    //     //     'imgage' => 'required',
    //     //     'nom' => 'required',
    //     //     'description' => 'required',
    //     //     'dare' => 'required',
    //     //     'etat' => 'required',
    //     // ]);

    //     $imagePath = $request->file('image')->store('images', 'public');

    //     $article=new Article();
    //     $article->image=$imagePath;
    //     $article-> nom = $request->nom;
    //     $article-> description = $request->description;
    //     $article-> date = $request->date;
    //     $article-> etat = $request->etat;

    //     $article->save();
    //     return redirect('/Ajouter')->with('status','L\' article a bien ete ajoute avec succes');




    // }

    public function article_traitement(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        // 'image' => 'required|image', // Assurez-vous que le champ de l'image est requis et qu'il s'agit d'une image
        'nom' => 'required',
        'description' => 'required',
        'date' => 'required',
        // 'etat' => 'required',
    ]);

    

    // Créer un nouvel article avec les données du formulaire
    $article = new Article();
    $article->image = $request->nom; // Attribuez le chemin de l'image à la propriété 'image'
    $article->nom = $request->nom;
    $article->description = $request->description;
    $article->date = $request->date;
    $article->etat = $request->etat;

    $article->save();
    
    return redirect('/Ajouter')->with('status', 'L\'article a bien été ajouté avec succès');
}

public function update_article($nom){
    $articles = Article :: find($nom);
    return view('mes_articles.update',compact($articles));
}

public function update_traitement(Request $request){
     // Valider les données du formulaire
     $request->validate([
        // 'image' => 'required|image', // Assurez-vous que le champ de l'image est requis et qu'il s'agit d'une image
        'nom' => 'required',
        'description' => 'required',
        'date' => 'required',
        // 'etat' => 'required',
    ]);

    

    // Créer un nouvel article avec les données du formulaire
    $article = new Article();
    $article->image = $request->nom; // Attribuez le chemin de l'image à la propriété 'image'
    $article->nom = $request->nom;
    $article->description = $request->description;
    $article->date = $request->date;
    $article->etat = $request->etat;

    $article->update();
    
    return redirect('/Ajouter')->with('status', 'L\'article a bien été modifi avec succès');
    

}

}
