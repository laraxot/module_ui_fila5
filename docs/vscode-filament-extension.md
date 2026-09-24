# VSCode Filament Extension (doonfrs.vscode-filament)

## Cos'è
Estensione per Visual Studio Code che fornisce **syntax highlighting** e **autocompletamento intelligente** per i componenti UI di Laravel Filament nei file Blade.

---

## Funzionalità principali
- **Autocompletamento dei componenti**: suggerisce tutti i componenti Filament disponibili (UI, Action, Form, Table) mentre si scrive nei file Blade.
- **Autocompletamento degli attributi**: mostra gli attributi disponibili per ciascun componente.
- **Autocompletamento dei valori**: suggerisce valori validi per determinati attributi (es. varianti, size, color).
- **Icon System Autocompletion**: suggerisce i nomi delle icone Filament quando si usano attributi relativi alle icone.
- **Syntax Highlighting**: evidenzia la sintassi Blade specifica dei componenti Filament.

---

## Componenti supportati
- **UI Components**
- **Action Components**
- **Form Components**
- **Table Components**

---

## Esempi d'uso
```blade
<x-filament::button label="Salva" color="primary" />
<x-filament::icon name="heroicon-o-user" />
```

Durante la digitazione di `<x-filament::`, l'estensione suggerisce i componenti e completa automaticamente attributi e valori.

---

## Installazione
- **Marketplace**: Cerca "Filament" su [VS Code Marketplace](https://marketplace.visualstudio.com/items?itemName=doonfrs.vscode-filament) e installa l'estensione.
- **Terminale**:
<<<<<<< .merge_file_9zsmCI
=======
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< HEAD
=======
- **Terminale**:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6VXYNu
- **Terminale**: 
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Terminale**:
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
- **Terminale**: 
=======
- **Terminale**:
>>>>>>> laraxot/dev
=======
- **Terminale**: 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
  ```sh
  code --install-extension doonfrs.vscode-filament
  ```

---

## Analisi e Consigli di Configurazione

L'estensione **doonfrs.vscode-filament** migliora notevolmente lo sviluppo Filament in VSCode offrendo:

- Autocompletamento intelligente di **componenti**, **attributi** e **valori** direttamente in Blade e PHP.
- Suggerimenti per **icon** e **varianti**, evitando errori di metodo non supportato.
- Evidenziazione della sintassi specifica Filament.

**Raccomandazioni di configurazione**:

```jsonc
// .vscode/settings.json
{
  "doonfrs.vscode-filament.enable": true,
  "doonfrs.vscode-filament.fileExtensions": [".blade.php", ".php"],
  "doonfrs.vscode-filament.searchPaths": [
    "app/Filament/Resources",
    "Modules/*/app/Filament/Resources",
    "resources/views",
    "Modules/*/resources/views"
  ]
}
```

- Aggiungere i percorsi dei moduli personalizzati per includere risorse e componenti custom.
- Verificare la compatibilità con le versioni di Filament e aggiornare l’estensione regolarmente.
- Utilizzare l'autocomplete per evitare l’uso di metodi non esistenti (es. `->prefixIcon()` su FileUpload).

**Vantaggi**:

- Riduzione di errori di battitura e di API incompatibili.
- Maggiore velocità nello sviluppo di UI Filament.
- Allineamento con le convenzioni di progetto (naming, namespace, metodi supportati).

**Limiti**:

- Può non riconoscere plugin Filament personalizzati non registrati.
- Richiede una buona configurazione di `searchPaths` per progetti modulati.

---

## Best Practice
- Consigliata per chi sviluppa UI Blade con Filament: velocizza la scrittura, riduce errori di sintassi e omissioni di attributi.
- Utile per scoprire rapidamente le opzioni disponibili di ogni componente.
- Favorisce la standardizzazione dei componenti UI nei progetti Laravel.

---

## Limitazioni e note
- L'autocompletamento è disponibile solo nei file Blade (`.blade.php`).
- Alcuni componenti personalizzati potrebbero non essere riconosciuti se non seguono la convenzione Filament.
- Verifica sempre la documentazione ufficiale Filament per API avanzate.

---

## Link utili
- [Estensione su VSCode Marketplace](https://marketplace.visualstudio.com/items?itemName=doonfrs.vscode-filament)
- [Repository GitHub](https://github.com/doonfrs/vscode-filament)
- [Documentazione Filament](https://filamentphp.com/docs)

---

## Aggiornamenti
<<<<<<< .merge_file_9zsmCI
=======
<<<<<<< HEAD
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
=======
<<<<<<< HEAD
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
# VSCode Filament Extension (doonfrs.vscode-filament)
<<<<<<< HEAD
## Cos'è
Estensione per Visual Studio Code che fornisce **syntax highlighting** e **autocompletamento intelligente** per i componenti UI di Laravel Filament nei file Blade.
---
=======

## Cos'è
Estensione per Visual Studio Code che fornisce **syntax highlighting** e **autocompletamento intelligente** per i componenti UI di Laravel Filament nei file Blade.

---

<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< HEAD
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
=======
<<<<<<< .merge_file_LOCb7i
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6VXYNu
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
# VSCode Filament Extension (doonfrs.vscode-filament)
## Cos'è
Estensione per Visual Studio Code che fornisce **syntax highlighting** e **autocompletamento intelligente** per i componenti UI di Laravel Filament nei file Blade.
---
<<<<<<< .merge_file_9zsmCI
=======
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
## Funzionalità principali
- **Autocompletamento dei componenti**: suggerisce tutti i componenti Filament disponibili (UI, Action, Form, Table) mentre si scrive nei file Blade.
- **Autocompletamento degli attributi**: mostra gli attributi disponibili per ciascun componente.
- **Autocompletamento dei valori**: suggerisce valori validi per determinati attributi (es. varianti, size, color).
- **Icon System Autocompletion**: suggerisce i nomi delle icone Filament quando si usano attributi relativi alle icone.
- **Syntax Highlighting**: evidenzia la sintassi Blade specifica dei componenti Filament.
<<<<<<< .merge_file_9zsmCI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c

---

=======
=======
<<<<<<< .merge_file_LOCb7i

---

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

---

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

---

>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
## Componenti supportati
- **UI Components**
- **Action Components**
- **Form Components**
- **Table Components**
<<<<<<< .merge_file_9zsmCI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c

---

=======
=======
<<<<<<< .merge_file_LOCb7i

---

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

---

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

---

>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
## Esempi d'uso
```blade
<x-filament::button label="Salva" color="primary" />
<x-filament::icon name="heroicon-o-user" />
```
<<<<<<< .merge_file_9zsmCI
Durante la digitazione di `<x-filament::`, l'estensione suggerisce i componenti e completa automaticamente attributi e valori.
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< .merge_file_LOCb7i
=======
<<<<<<< HEAD
Durante la digitazione di `<x-filament::`, l'estensione suggerisce i componenti e completa automaticamente attributi e valori.
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
Durante la digitazione di `<x-filament::`, l'estensione suggerisce i componenti e completa automaticamente attributi e valori.
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu

Durante la digitazione di `<x-filament::`, l'estensione suggerisce i componenti e completa automaticamente attributi e valori.

---

<<<<<<< .merge_file_8wBQ6c
=======
Durante la digitazione di `<x-filament::`, l'estensione suggerisce i componenti e completa automaticamente attributi e valori.
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_LOCb7i
<<<<<<< HEAD
=======
=======
Durante la digitazione di `<x-filament::`, l'estensione suggerisce i componenti e completa automaticamente attributi e valori.
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6VXYNu
>>>>>>> .merge_file_L4WKTi
## Installazione
- **Marketplace**: Cerca "Filament" su [VS Code Marketplace](https://marketplace.visualstudio.com/items?itemName=doonfrs.vscode-filament) e installa l'estensione.
- **Terminale**:
  ```sh
  code --install-extension doonfrs.vscode-filament
  ```
<<<<<<< .merge_file_9zsmCI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< .merge_file_LOCb7i
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Analisi e Consigli di Configurazione
L'estensione **doonfrs.vscode-filament** migliora notevolmente lo sviluppo Filament in VSCode offrendo:
- Autocompletamento intelligente di **componenti**, **attributi** e **valori** direttamente in Blade e PHP.
- Suggerimenti per **icon** e **varianti**, evitando errori di metodo non supportato.
- Evidenziazione della sintassi specifica Filament.
**Raccomandazioni di configurazione**:
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu

---

>>>>>>> .merge_file_L4WKTi
## Analisi e Consigli di Configurazione
L'estensione **doonfrs.vscode-filament** migliora notevolmente lo sviluppo Filament in VSCode offrendo:
- Autocompletamento intelligente di **componenti**, **attributi** e **valori** direttamente in Blade e PHP.
- Suggerimenti per **icon** e **varianti**, evitando errori di metodo non supportato.
- Evidenziazione della sintassi specifica Filament.
**Raccomandazioni di configurazione**:
<<<<<<< .merge_file_9zsmCI
=======

<<<<<<< .merge_file_8wBQ6c
=======
=======
<<<<<<< .merge_file_LOCb7i
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6VXYNu
## Analisi e Consigli di Configurazione
L'estensione **doonfrs.vscode-filament** migliora notevolmente lo sviluppo Filament in VSCode offrendo:
- Autocompletamento intelligente di **componenti**, **attributi** e **valori** direttamente in Blade e PHP.
- Suggerimenti per **icon** e **varianti**, evitando errori di metodo non supportato.
- Evidenziazione della sintassi specifica Filament.
**Raccomandazioni di configurazione**:
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
```jsonc
// .vscode/settings.json
{
  "doonfrs.vscode-filament.enable": true,
  "doonfrs.vscode-filament.fileExtensions": [".blade.php", ".php"],
  "doonfrs.vscode-filament.searchPaths": [
    "app/Filament/Resources",
    "Modules/*/app/Filament/Resources",
    "resources/views",
    "Modules/*/resources/views"
  ]
}
<<<<<<< .merge_file_9zsmCI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< .merge_file_LOCb7i
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_L4WKTi
- Aggiungere i percorsi dei moduli personalizzati per includere risorse e componenti custom.
- Verificare la compatibilità con le versioni di Filament e aggiornare l’estensione regolarmente.
- Utilizzare l'autocomplete per evitare l’uso di metodi non esistenti (es. `->prefixIcon()` su FileUpload).
**Vantaggi**:
- Riduzione di errori di battitura e di API incompatibili.
- Maggiore velocità nello sviluppo di UI Filament.
- Allineamento con le convenzioni di progetto (naming, namespace, metodi supportati).
**Limiti**:
- Può non riconoscere plugin Filament personalizzati non registrati.
- Richiede una buona configurazione di `searchPaths` per progetti modulati.
<<<<<<< .merge_file_9zsmCI
=======
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
```

- Aggiungere i percorsi dei moduli personalizzati per includere risorse e componenti custom.
- Verificare la compatibilità con le versioni di Filament e aggiornare l’estensione regolarmente.
- Utilizzare l'autocomplete per evitare l’uso di metodi non esistenti (es. `->prefixIcon()` su FileUpload).

**Vantaggi**:

- Riduzione di errori di battitura e di API incompatibili.
- Maggiore velocità nello sviluppo di UI Filament.
- Allineamento con le convenzioni di progetto (naming, namespace, metodi supportati).

**Limiti**:

- Può non riconoscere plugin Filament personalizzati non registrati.
- Richiede una buona configurazione di `searchPaths` per progetti modulati.

---

<<<<<<< .merge_file_8wBQ6c
=======
=======
<<<<<<< .merge_file_LOCb7i
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6VXYNu
- Aggiungere i percorsi dei moduli personalizzati per includere risorse e componenti custom.
- Verificare la compatibilità con le versioni di Filament e aggiornare l’estensione regolarmente.
- Utilizzare l'autocomplete per evitare l’uso di metodi non esistenti (es. `->prefixIcon()` su FileUpload).
**Vantaggi**:
- Riduzione di errori di battitura e di API incompatibili.
- Maggiore velocità nello sviluppo di UI Filament.
- Allineamento con le convenzioni di progetto (naming, namespace, metodi supportati).
**Limiti**:
- Può non riconoscere plugin Filament personalizzati non registrati.
- Richiede una buona configurazione di `searchPaths` per progetti modulati.
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
## Best Practice
- Consigliata per chi sviluppa UI Blade con Filament: velocizza la scrittura, riduce errori di sintassi e omissioni di attributi.
- Utile per scoprire rapidamente le opzioni disponibili di ogni componente.
- Favorisce la standardizzazione dei componenti UI nei progetti Laravel.
<<<<<<< .merge_file_9zsmCI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c

---

=======
=======
<<<<<<< .merge_file_LOCb7i

---

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

---

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

---

>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
## Limitazioni e note
- L'autocompletamento è disponibile solo nei file Blade (`.blade.php`).
- Alcuni componenti personalizzati potrebbero non essere riconosciuti se non seguono la convenzione Filament.
- Verifica sempre la documentazione ufficiale Filament per API avanzate.
<<<<<<< .merge_file_9zsmCI
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c

---

=======
=======
<<<<<<< .merge_file_LOCb7i

---

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

---

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

---

>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
## Link utili
- [Estensione su VSCode Marketplace](https://marketplace.visualstudio.com/items?itemName=doonfrs.vscode-filament)
- [Repository GitHub](https://github.com/doonfrs/vscode-filament)
- [Documentazione Filament](https://filamentphp.com/docs)
<<<<<<< .merge_file_9zsmCI
## Aggiornamenti

```
=======
<<<<<<< HEAD
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< .merge_file_LOCb7i
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Aggiornamenti

```
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu

---

## Aggiornamenti
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
<<<<<<< .merge_file_8wBQ6c
=======
=======
<<<<<<< .merge_file_LOCb7i
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6VXYNu
## Aggiornamenti
<<<<<<< HEAD

```
=======
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
Per segnalare bug o suggerire miglioramenti, usa la [pagina GitHub dell'estensione](https://github.com/doonfrs/vscode-filament).
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_8wBQ6c
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uD4oxe
>>>>>>> .merge_file_6VXYNu
>>>>>>> laraxot/dev
>>>>>>> .merge_file_L4WKTi
