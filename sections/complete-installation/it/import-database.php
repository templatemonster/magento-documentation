<h3>Importa Sample data</h3>
<p>Pacchetto modello Magento contiene il file di dati di esempio (<strong>dump.sql</strong> o <strong>dump.gz</strong>). Questo file si trova sotto il <strong>/sources/sample_data</strong> cartella del template. Esso consente di caricare i dati di esempio, in modo che il vostro sito appare esattamente come il nostro modello demo.</p>
<p class="alert alert-danger"><span>Non puoi importare <strong>dump.sql.gz</strong> se hai già i dati sul tuo sito. Importando <strong>dump.sql.gz</strong> tutti i prodotti saranno cancellati dal vostro negozio. Se non si desidera installare dati di esempio, utilizzare database pulito durante l'installazione di Magento. Ignorare il passaggio di installazione dei dati di esempio.</span></p>	
<p>Per installare il file di dump, attenersi alla seguente procedura:</p>
<ol class="index-list">
	<li>Accedere PhpMyAdmin e selezionare il database che verrà utilizzato per Magento Commerce (E' stato creato da voi con l'aiuto delle istruzioni fornite in precedenza). <figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Navigare verso <strong>"Import"</strong> scheda e fare clic <strong>"Browse"</strong> pulsante. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Trovare il <strong>"/sources/sample_data"</strong> cartella del vostro modello, quindi il <strong>dump.sql.gz.</strong>file. Clicca su <strong>"GO"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure>Il processo di importazione può richiedere alcuni minuti.</li>
</ol>