
<!--
/**
 * here into the above function which name is edit is created into contorller file 
 * and this funciton is calling view.php file where slug is passing into input params of 
 * edit function like : edit($slug)  {
 *                                   
 *                                     }
 * here we can change name of edit input params to $slug but for level of production we will keep same as key name 
 * of table
 */
?>
-->

<h2><?= $this->Html->link('Add new Article',['action'=>'add']) ?></h2>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: 10px;
  text-align: center;
  font-family: arial;
}

.price {
  color: black;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 3px;
  color: white;
  background-color: #ff0000;
  text-align: center;
  cursor: pointer;
  width: 60%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
  color: grey;
}
</style>
</head>
<body>


<h2 style="text-align:center"></h2>

<table dir="auto">
    
<tr>
<?php foreach ($articles as $article): ?>
    
        <td>
<div class="card">
  
  <h3 style="color:red"><?=$article->title?></h3 >
  <p class="price"><?=$article->slug?></p>
  
<!--  <p><button><?= $this->Html->link($article->title,['action'=>'view',$article->slug]); ?></button></p>-->
  <p><button><?= $this->Html->link('view',['action'=>'view',$article->slug]); ?></button></p>

  <button><?= $this->Html->link('Edit',['action'=>'edit',$article->slug]); ?></button>
</div>
</td>

<?php endforeach; ?>
</tr>

</table>

</body>