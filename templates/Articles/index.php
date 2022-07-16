

<h2>Article list</h2><br>

<button>Add New </button>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Created</th>
            <th>body</th>
            <th>published</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($articles as $article): ?>
        <tr>
            <td>
                <?= $this->Html->link($article->title,['action'=>'view',$article->slug]); ?>
            </td>
            
            <td>
                <?= $article->created->format(DATE_RFC850); ?>
            </td>
            <td>
                <?=$article->slug; ?>
            </td>
            <td>
                <?= $article->published; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>