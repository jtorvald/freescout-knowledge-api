<?php
Route::group(['prefix' => \Helper::getSubdirectory(), 'namespace' => 'Modules\KnowledgeBaseApiModule\Http\Controllers'], function () {
    Route::get('/api/knowledgebase/{mailboxId}/categories', ['uses' => 'KnowledgeBaseApiController@get', 'laroute' => false])->name('knowledgebase.index');
    Route::get('/api/knowledgebase/{mailboxId}/categories/{categoryId}', ['uses' => 'KnowledgeBaseApiController@category', 'laroute' => false])->name('knowledgebase.category');
});
