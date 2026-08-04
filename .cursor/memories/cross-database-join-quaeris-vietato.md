# Memoria: Join cross-database Quaeris - VIETATO

## Contesto
Progetto Quaeris usa due database:
- **quaeris_data**: contacts, survey_pdfs, question_charts, mail_templates
- **quaeris_survey**: lime_surveys, lime_questions, lime_survey_{SID}, lime_tokens_{SID}

## Regola
**MAI fare join tra tabelle di database diversi.**

## Errore tipico
`Table 'quaeris_survey.contacts' doesn't exist`

La query usa connessione default (quaeris_survey) e cerca `contacts` che è in quaeris_data.

## Pattern corretto
```php
// ✅ Due query separate, merge in PHP
$invited = Contact::where('survey_pdf_id', $surveyPdfId)
    ->where('sms_count', '!=', 0)
    ->groupByRaw(...)
    ->get();

$answers = Contact::where('survey_pdf_id', $surveyPdfId)
    ->where('sms_count', '!=', 0)
    ->groupByRaw(...)
    ->get();

$data = $this->mergeInvitedAnswers($invited, $answers);
```

## Pattern errato
```php
// ❌ Join cross-database
$questionChart->answers()  // lime_survey_{SID} su quaeris_survey
    ->join('contacts', ...)  // contacts su quaeris_data - ERRORE!
```

## Riferimenti
- [CROSS_DATABASE_JOIN_RULE](../../../docs/CROSS_DATABASE_JOIN_RULE.md)