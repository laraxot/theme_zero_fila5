# Memoria: GROUP BY con DATE_FORMAT - groupByRaw obbligatorio

## Contesto
Query custom charts (MailResponseRate, SmsResponseRate) che raggruppano per periodo (es. mese, anno).

## Due errori distinti

### 1. only_full_group_by
**Errore**: `Expression #2 of SELECT list is not in GROUP BY clause`

**Causa**: SELECT con due espressioni DATE_FORMAT diverse (es. label "%Y-%b") e (_sort "%Y-%m") ma GROUP BY solo con una.

**Fix**: Includere entrambe le espressioni nel GROUP BY:
```php
->groupByRaw($group_by_expr . ', ' . $sort_by_expr)
```

### 2. Backtick wrapping
**Errore**: `Unknown column 'DATE_FORMAT(sms_sent_at, "%Y-%b")' in 'group statement'`

**Causa**: `groupBy([$expr])` fa sì che Laravel generi `GROUP BY \`DATE_FORMAT(...)\`` trattando l'espressione come nome colonna.

**Fix**: Usare `groupByRaw()` per passare SQL raw:
```php
// ❌ SBAGLIATO
->groupBy([$group_by_expr, $sort_by_expr]);

// ✅ CORRETTO
->groupByRaw($group_by_expr . ', ' . $sort_by_expr);
```

## Alternativa
Se label e sort usano la stessa espressione, usare una sola variabile per SELECT, GROUP BY e ORDER BY (vedi SMSRESPONSERATE_GROUPBY_FIX.md).

## Riferimenti
- [SMSRESPONSERATE_GROUPBY_FIX](../../../docs/SMSRESPONSERATE_GROUPBY_FIX.md)
- [CROSS_DATABASE_JOIN_RULE](../../../docs/CROSS_DATABASE_JOIN_RULE.md)