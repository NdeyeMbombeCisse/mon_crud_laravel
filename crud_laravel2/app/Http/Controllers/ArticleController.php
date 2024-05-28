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


    public function article_traitement(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
         'image' => 'required', 
        'nom' => 'required',
        'description' => 'required',
        'date' => 'required',
         'etat' => 'required',
    ]);

    

    // if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->store('images', 'public');
        
    // }


    

    // Créer un nouvel article avec les données du formulaire
    $article = new Article();
    $article->image = $request-> image;// Attribuez le chemin de l'image à la propriété 'image'
    $article->nom = $request->nom;
    $article->description = $request->description;
    $article->date = $request->date;
    $article->etat = $request->etat;

    $article->save();
    
    return redirect('/Ajouter')->with('status', 'L\'article a bien été ajouté avec succès');
}

public function update_article($id){
    $articles = Article :: find($id);
    return view('mes_articles.update',compact('articles'));
}

public function update_traitement(Request $request, $id){
     // Valider les données du formulaire
     $request->validate([
         'image' => 'required', 
        'nom' => 'required',
        'description' => 'required',
        'date' => 'required',
         'etat' => 'required',
    ]);

    
    //  if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->store('images', 'public');
        
    //  }


    // Créer un nouvel article avec les données du formulaire
    $article =  Article::find($id);
    $article->image = $request->image;// Attribuez le chemin de l'image à la propriété 'image'
    $article->nom = $request->nom;
    $article->description = $request->description;
    $article->date = $request->date;
    $article->etat = $request->etat;
    $article->update();
    
    return redirect('Affichage')->with('status', 'L\'article a bien été modifi avec succès');
    
}
public function delete_article($id){
    $article= Article :: find($id);
    $article->delete();
    return redirect('Affichage')->with('status', 'L\'article a bien été supprime avec succès');
    
}

public function detail_article(){
    return view('mes_articles.detail');
}

}
