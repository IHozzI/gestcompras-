SELECT Nome ,COUNT(`Nome`) AS NumLotes,SUM(`ValorTotal`)AS Total, `Ano` FROM `Procedimento` GROUP BY `Ano`, `Nome` 

SELECT COUNT(`Nome`) AS NumLotes,SUM(`ValorTotal`)AS Total, `Ano` FROM `Procedimento` GROUP BY `Ano`