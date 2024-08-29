<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookmark $bookmark
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bookmark'), ['action' => 'edit', $bookmark->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bookmark'), ['action' => 'delete', $bookmark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bookmarks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bookmark'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookmarks view content">
            <h3><?= h($bookmark->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $bookmark->has('user') ? $this->Html->link($bookmark->user->id, ['controller' => 'Users', 'action' => 'view', $bookmark->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($bookmark->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bookmark->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bookmark->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bookmark->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($bookmark->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Url') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($bookmark->url)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Bookmarks Tags') ?></h4>
                <?php if (!empty($bookmark->bookmarks_tags)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Bookmark Id') ?></th>
                            <th><?= __('Tag Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($bookmark->bookmarks_tags as $bookmarksTags) : ?>
                        <tr>
                            <td><?= h($bookmarksTags->bookmark_id) ?></td>
                            <td><?= h($bookmarksTags->tag_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'BookmarksTags', 'action' => 'view', $bookmarksTags->bookmark_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'BookmarksTags', 'action' => 'edit', $bookmarksTags->bookmark_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BookmarksTags', 'action' => 'delete', $bookmarksTags->bookmark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarksTags->bookmark_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
