# Componenti Feedback e Notifiche

## 🚨 Alert e Notifiche

### Alert Base
```html
<!-- Successo -->
<div class="alert alert-success" role="alert">
  <i class="fas fa-check-circle"></i>
  Operazione completata con successo
</div>

<!-- Errore -->
<div class="alert alert-danger" role="alert">
  <i class="fas fa-exclamation-circle"></i>
  Si è verificato un errore
</div>

<!-- Info -->
<div class="alert alert-info" role="alert">
  <i class="fas fa-info-circle"></i>
  Informazione importante
</div>

<!-- Warning -->
<div class="alert alert-warning" role="alert">
  <i class="fas fa-exclamation-triangle"></i>
  Attenzione: azione richiesta
</div>
```

### Alert Dismissible
```html
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Attenzione!</strong> Questa azione non può essere annullata.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Chiudi"></button>
</div>
```

## 📢 Toast e Snackbar

### Toast
```html
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="me-auto">Notifica</strong>
    <small>Ora</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Chiudi"></button>
  </div>
  <div class="toast-body">
    Operazione completata con successo
  </div>
</div>
```

### Snackbar
```html
<div class="snackbar" role="alert" aria-live="polite">
  <div class="snackbar-content">
    <span class="snackbar-message">Modifiche salvate</span>
    <button class="snackbar-action">Annulla</button>
  </div>
</div>
```

## 🗨️ Modali e Dialoghi

### Modal Base
```html
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Titolo Modale</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
      </div>
      <div class="modal-body">
        <p>Contenuto del modale</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-primary">Conferma</button>
      </div>
    </div>
  </div>
</div>
```

### Dialogo di Conferma
```html
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <i class="fas fa-question-circle fa-3x mb-3"></i>
        <h5 class="modal-title">Sei sicuro?</h5>
        <p>Questa azione non può essere annullata</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-danger">Elimina</button>
      </div>
    </div>
  </div>
</div>
```

## 💡 Tooltip e Popover

### Tooltip
```html
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_IAgGj3
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<button 
  type="button" 
  class="btn btn-secondary" 
  data-bs-toggle="tooltip" 
  data-bs-placement="top" 
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_IAgGj3
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<button
  type="button"
  class="btn btn-secondary"
  data-bs-toggle="tooltip"
  data-bs-placement="top"
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  title="Tooltip in alto"
>
  Tooltip
</button>
```

### Popover
```html
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_IAgGj3
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<button 
  type="button" 
  class="btn btn-secondary" 
  data-bs-toggle="popover" 
  data-bs-placement="right" 
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_IAgGj3
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<button
  type="button"
  class="btn btn-secondary"
  data-bs-toggle="popover"
  data-bs-placement="right"
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
  data-bs-content="Contenuto del popover"
  title="Titolo Popover"
>
  Popover
</button>
```

## ⏳ Progress e Loading States

### Progress Bar
```html
<div class="progress">
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_IAgGj3
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
  <div 
    class="progress-bar progress-bar-striped progress-bar-animated" 
    role="progressbar" 
    style="width: 75%" 
    aria-valuenow="75" 
    aria-valuemin="0" 
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_IAgGj3
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
  <div
    class="progress-bar progress-bar-striped progress-bar-animated"
    role="progressbar"
    style="width: 75%"
    aria-valuenow="75"
    aria-valuemin="0"
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
    aria-valuemax="100"
  >
    75%
  </div>
</div>
```

### Skeleton Loading
```html
<div class="skeleton">
  <div class="skeleton-header"></div>
  <div class="skeleton-body">
    <div class="skeleton-line"></div>
    <div class="skeleton-line"></div>
    <div class="skeleton-line"></div>
  </div>
</div>
```

## 🎨 Stili e Comportamenti

### Animazioni
```scss
// Fade in/out
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
}

// Slide in/out
@keyframes slideIn {
  from { transform: translateY(100%); }
  to { transform: translateY(0); }
}

@keyframes slideOut {
  from { transform: translateY(0); }
  to { transform: translateY(100%); }
}
```

### Z-index
```scss
$zindex-dropdown: 1000;
$zindex-sticky: 1020;
$zindex-fixed: 1030;
$zindex-modal-backdrop: 1040;
$zindex-modal: 1050;
$zindex-popover: 1060;
$zindex-tooltip: 1070;
```

## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Layout](./layout-components.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
- [Performance](./standards/performance.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Performance](./standards/performance.md) 
=======
=======
<<<<<<< .merge_file_IAgGj3
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Performance](./standards/performance.md) 
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
- [Performance](./standards/performance.md)
# Componenti Feedback e Notifiche
<<<<<<< HEAD
## 🚨 Alert e Notifiche
=======

## 🚨 Alert e Notifiche

<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
- [Performance](./standards/performance.md) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Performance](./standards/performance.md) 
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Performance](./standards/performance.md) 
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [Performance](./standards/performance.md)
# Componenti Feedback e Notifiche
## 🚨 Alert e Notifiche
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
### Alert Base
```html
<!-- Successo -->
<div class="alert alert-success" role="alert">
  <i class="fas fa-check-circle"></i>
  Operazione completata con successo
</div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3

=======
=======
<<<<<<< .merge_file_fC3VkP

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<!-- Errore -->
<div class="alert alert-danger" role="alert">
  <i class="fas fa-exclamation-circle"></i>
  Si è verificato un errore
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
</div>

=======
=======
<<<<<<< .merge_file_fC3VkP
</div>

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
</div>

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
</div>

>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<!-- Info -->
<div class="alert alert-info" role="alert">
  <i class="fas fa-info-circle"></i>
  Informazione importante
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
</div>

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> .merge_file_TdsEP6
</div>

=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_IAgGj3
=======
>>>>>>> laraxot/dev
=======
=======
</div>

>>>>>>> .merge_file_OyVCrs
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<!-- Warning -->
<div class="alert alert-warning" role="alert">
  <i class="fas fa-exclamation-triangle"></i>
  Attenzione: azione richiesta
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
```
### Alert Dismissible
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Attenzione!</strong> Questa azione non può essere annullata.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Chiudi"></button>
## 📢 Toast e Snackbar
### Toast
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
</div>
```

### Alert Dismissible
```html
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Attenzione!</strong> Questa azione non può essere annullata.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Chiudi"></button>
</div>
```

## 📢 Toast e Snackbar

### Toast
```html
<<<<<<< .merge_file_IAgGj3
=======
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
```
### Alert Dismissible
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Attenzione!</strong> Questa azione non può essere annullata.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Chiudi"></button>
## 📢 Toast e Snackbar
### Toast
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="me-auto">Notifica</strong>
    <small>Ora</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Chiudi"></button>
  </div>
  <div class="toast-body">
    Operazione completata con successo
<<<<<<< HEAD
### Snackbar
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
### Snackbar
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Snackbar
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
  </div>
</div>
```

### Snackbar
```html
<<<<<<< .merge_file_IAgGj3
=======
### Snackbar
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
### Snackbar
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<div class="snackbar" role="alert" aria-live="polite">
  <div class="snackbar-content">
    <span class="snackbar-message">Modifiche salvate</span>
    <button class="snackbar-action">Annulla</button>
<<<<<<< HEAD
## 🗨️ Modali e Dialoghi
### Modal Base
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
## 🗨️ Modali e Dialoghi
### Modal Base
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 🗨️ Modali e Dialoghi
### Modal Base
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
  </div>
</div>
```

## 🗨️ Modali e Dialoghi

### Modal Base
```html
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
>>>>>>> .merge_file_TdsEP6
=======
## 🗨️ Modali e Dialoghi
### Modal Base
>>>>>>> laraxot/dev
<<<<<<< .merge_file_IAgGj3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Titolo Modale</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
      </div>
      <div class="modal-body">
        <p>Contenuto del modale</p>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-primary">Conferma</button>
    </div>
### Dialogo di Conferma
  <div class="modal-dialog modal-dialog-centered" role="document">
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-primary">Conferma</button>
      </div>
    </div>
  </div>
</div>
```

### Dialogo di Conferma
```html
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
<<<<<<< .merge_file_IAgGj3
=======
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-primary">Conferma</button>
    </div>
### Dialogo di Conferma
  <div class="modal-dialog modal-dialog-centered" role="document">
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
      <div class="modal-body text-center">
        <i class="fas fa-question-circle fa-3x mb-3"></i>
        <h5 class="modal-title">Sei sicuro?</h5>
        <p>Questa azione non può essere annullata</p>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger">Elimina</button>
## 💡 Tooltip e Popover
### Tooltip
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-danger">Elimina</button>
      </div>
    </div>
  </div>
</div>
```

## 💡 Tooltip e Popover

### Tooltip
```html
<<<<<<< .merge_file_IAgGj3
=======
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger">Elimina</button>
## 💡 Tooltip e Popover
### Tooltip
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<button
  type="button"
  class="btn btn-secondary"
  data-bs-toggle="tooltip"
  data-bs-placement="top"
  title="Tooltip in alto"
>
  Tooltip
</button>
<<<<<<< HEAD
### Popover
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
### Popover
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Popover
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
```

### Popover
```html
<button
  type="button"
  class="btn btn-secondary"
<<<<<<< .merge_file_IAgGj3
=======
### Popover
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
### Popover
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
  data-bs-toggle="popover"
  data-bs-placement="right"
  data-bs-content="Contenuto del popover"
  title="Titolo Popover"
<<<<<<< HEAD
  Popover
## ⏳ Progress e Loading States
### Progress Bar
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_OyVCrs
  Popover
## ⏳ Progress e Loading States
### Progress Bar
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>
  Popover
</button>
```

## ⏳ Progress e Loading States

### Progress Bar
```html
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
>>>>>>> .merge_file_TdsEP6
=======
  Popover
## ⏳ Progress e Loading States
### Progress Bar
>>>>>>> laraxot/dev
<<<<<<< .merge_file_IAgGj3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<div class="progress">
  <div
    class="progress-bar progress-bar-striped progress-bar-animated"
    role="progressbar"
    style="width: 75%"
    aria-valuenow="75"
    aria-valuemin="0"
    aria-valuemax="100"
  >
    75%
<<<<<<< HEAD
### Skeleton Loading
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
### Skeleton Loading
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Skeleton Loading
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
  </div>
</div>
```

### Skeleton Loading
```html
<<<<<<< .merge_file_IAgGj3
=======
### Skeleton Loading
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
### Skeleton Loading
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<div class="skeleton">
  <div class="skeleton-header"></div>
  <div class="skeleton-body">
    <div class="skeleton-line"></div>
<<<<<<< HEAD
## 🎨 Stili e Comportamenti
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
## 🎨 Stili e Comportamenti
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## 🎨 Stili e Comportamenti
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
    <div class="skeleton-line"></div>
    <div class="skeleton-line"></div>
  </div>
</div>
```

## 🎨 Stili e Comportamenti

<<<<<<< .merge_file_IAgGj3
=======
## 🎨 Stili e Comportamenti
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
## 🎨 Stili e Comportamenti
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
### Animazioni
```scss
// Fade in/out
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
<<<<<<< HEAD
@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_OyVCrs
@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6

@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
}

<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
>>>>>>> .merge_file_TdsEP6
=======
@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
>>>>>>> laraxot/dev
<<<<<<< .merge_file_IAgGj3
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
// Slide in/out
@keyframes slideIn {
  from { transform: translateY(100%); }
  to { transform: translateY(0); }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
@keyframes slideOut {
  from { transform: translateY(0); }
  to { transform: translateY(100%); }
### Z-index
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
}

@keyframes slideOut {
  from { transform: translateY(0); }
  to { transform: translateY(100%); }
}
```

### Z-index
```scss
<<<<<<< .merge_file_IAgGj3
=======
=======
<<<<<<< .merge_file_fC3VkP
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_TdsEP6
@keyframes slideOut {
  from { transform: translateY(0); }
  to { transform: translateY(100%); }
### Z-index
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
$zindex-dropdown: 1000;
$zindex-sticky: 1020;
$zindex-fixed: 1030;
$zindex-modal-backdrop: 1040;
$zindex-modal: 1050;
$zindex-popover: 1060;
$zindex-tooltip: 1070;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_IAgGj3
```

=======
=======
<<<<<<< .merge_file_fC3VkP
```

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
```

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
```

>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
## 🔗 Collegamenti
- [Componenti Base](./base-components.md)
- [Layout](./layout-components.md)
- [Accessibilità](./standards/accessibility.md)
<<<<<<< HEAD
<<<<<<< HEAD

```
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
- [Performance](./standards/performance.md)
=======
<<<<<<< HEAD
=======
<<<<<<< .merge_file_fC3VkP
- [Performance](./standards/performance.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Performance](./standards/performance.md)
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev

```
=======
- [Performance](./standards/performance.md)
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< .merge_file_fC3VkP
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [Performance](./standards/performance.md) 
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
<<<<<<< .merge_file_IAgGj3
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OyVCrs
>>>>>>> .merge_file_TdsEP6
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
