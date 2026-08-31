# Memoria: MergeInvitedAnswers - Import obbligatorio

## Contesto
Classe usata in MailResponseRate e SmsResponseRate (custom charts Quaeris).

## Namespace
`Modules\Quaeris\Actions\QuestionChart\Custom\Custom\MergeInvitedAnswers`

## Regola
**Import esplicito obbligatorio** in ogni file che usa MergeInvitedAnswers.

```php
use Modules\Quaeris\Actions\QuestionChart\Custom\Custom\MergeInvitedAnswers;
```

## Errore tipico
`Target class [Modules\Quaeris\Actions\QuestionChart\Custom\MergeInvitedAnswers] does not exist`

La classe è in `Custom\Custom\` (doppio Custom), non in `Custom\`. Senza import, Laravel risolve il namespace errato.

## Riferimenti
- [custom-charts-session-summary](../../../docs/custom-charts-session-summary.md)
- [custom-charts-answerschartdata-groupby rule](../../../.cursor/rules/custom-charts-answerschartdata-groupby.mdc)
