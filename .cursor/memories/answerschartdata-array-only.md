# Memoria: AnswersChartData - answers deve essere array

## Contesto
DTO Spatie Laravel Data per dati chart custom. Usato da MailResponseRate, SmsResponseRate, ContactsCompleted, AvgGroup2, RootGroupedBf.

## Regola critica
**La proprietà `answers` deve essere sempre `array`, mai `DataCollection`.**

## Motivo tecnico
- Spatie Laravel Data con union type `array|DataCollection` su proprietà nested causa `CreationContext::next(): Argument #1 ($dataClass) must be of type string, null given`
- Il cast/pipe di Spatie non riesce a risolvere il dataClass per la creazione ricorsiva

## Pattern corretto
```php
// mergeInvitedAnswers restituisce DataCollection
$data = $this->mergeInvitedAnswers($invited_rows, $answers_rows);
$answersArray = $data->toArray();

return AnswersChartData::from([
    'answers' => $answersArray,  // array, non DataCollection
    'chart' => $chartData,
    ...
]);
```

## Pattern errato
```php
// ❌ Passa DataCollection
return AnswersChartData::from(['answers' => $dataCollection, ...]);

// ❌ Union type in AnswersChartData
public array|DataCollection $answers;  // Causa CreationContext::next(null)
```

## Riferimenti
- [custom-charts-root-cause-decision-tree](../../../docs/custom-charts-root-cause-decision-tree.md)
- [custom-charts-answerschartdata-groupby rule](../../../.cursor/rules/custom-charts-answerschartdata-groupby.mdc)
