<h1><?= $article->title ?> </h1>
<p><?= $article->body ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850); ?></small></p>

<button ><?= $this->Html->link('Edit',['action'=>'edit',$article->slug]);?></button>

<?= $this->fetch('css') ?>


<table>
 

  <tbody>
  <thead>
<tr>
<th>network</th>
<th>launch</th>
</tr>
</thead>
<tr>
      <td>5g</td>
      <td>2015, August 13. Released 2015, August
</td>
      </tr>
      </tbody>


      <tr>
<th>display</th>
<th>platform</th>
</tr>
</thead>
<tr>
      <td>5g</td>
      <td>2015, August 13. Released 2015, August
</td>
      </tr>
      </tbody>

      <tr>
<th>front camera</th>
<th>rear camera</th>
</tr>
</thead>
<tr>
      <td>5g</td>
      <td>2015, August 13. Released 2015, August
</td>
      </tr>
      </tbody>

      <tr>
<th>battery</th>
<th>ram</th>
</tr>
</thead>
<tr>
      <td>5g</td>
      <td>2015, August 13. Released 2015, August
</td>
      </tr>
      </tbody>


</table>