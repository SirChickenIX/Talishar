<?php

include "Constants.php";
include "CardDictionaries/WelcomeToRathe/WTRShared.php";
include "CardDictionaries/ArcaneRising/ARCShared.php";
include "CardDictionaries/ArcaneRising/ARCGeneric.php";
include "CardDictionaries/ArcaneRising/ARCMechanologist.php";
include "CardDictionaries/ArcaneRising/ARCRanger.php";
include "CardDictionaries/ArcaneRising/ARCRuneblade.php";
include "CardDictionaries/ArcaneRising/ARCWizard.php";
include "CardDictionaries/CrucibleOfWar/CRUShared.php";
include "CardDictionaries/Monarch/MONShared.php";
include "CardDictionaries/Monarch/MONGeneric.php";
include "CardDictionaries/Monarch/MONBrute.php";
include "CardDictionaries/Monarch/MONIllusionist.php";
include "CardDictionaries/Monarch/MONRuneblade.php";
include "CardDictionaries/Monarch/MONWarrior.php";
include "CardDictionaries/Monarch/MONTalent.php";
include "CardDictionaries/TalesOfAria/ELEShared.php";
include "CardDictionaries/TalesOfAria/ELEGuardian.php";
include "CardDictionaries/TalesOfAria/ELERanger.php";
include "CardDictionaries/TalesOfAria/ELERuneblade.php";
include "CardDictionaries/TalesOfAria/ELETalent.php";
include "CardDictionaries/Everfest/EVRShared.php";
include "CardDictionaries/Uprising/UPRShared.php";
include "CardDictionaries/card_names.php";
include "CardDictionaries/PlayAbilities.php";
include "CardDictionaries/HitEffects.php";
include "CardDictionaries/CurrentEffects.php";
include "CardDictionaries/ActivatedAbilities.php";
include "CardDictionaries/ClassicBattles/DVRShared.php";
include "CardDictionaries/ClassicBattles/RVDShared.php";
include "CardDictionaries/Dynasty/DYNShared.php";
include "CardDictionaries/Outsiders/OUTShared.php";
include "CardDictionaries/DuskTillDawn/DTDShared.php";
include "CardDictionaries/Roguelike/ROGUEShared.php";

include "GeneratedCode/GeneratedCardDictionaries.php";
include "GeneratedCode/DatabaseGeneratedCardDictionaries.php";

$CID_BloodRotPox = "OUT234";
$CID_Frailty = "OUT235";
$CID_Inertia = "OUT236";

$CID_TekloHead = "LGS186";
$CID_TekloChest = "LGS187";
$CID_TekloArms = "LGS188";
$CID_TekloLegs = "LGS189";

function CardType($cardID)
{
  if(!$cardID) return "";
  $set = CardSet($cardID);
  if($set != "ROG" && $set != "DUM") {
    $number = intval(substr($cardID, 3));
    if($number < 400) return GeneratedCardType($cardID);
    else if($set != "MON" && $set != "DYN" && $cardID != "UPR551") return GeneratedCardType($cardID);
  }
  if($set == "ROG") return ROGUECardType($cardID);
  switch ($cardID) {
    case "MON406": return "M";
    case "MON400": case "MON401": case "MON402": return "E";
    case "MON404": return "M";
    case "MON405": return "M";
    case "MON406": case "MON407": return "M";
    case "UPR551": return "-";
    case "DYN492a": return "W";
    case "DYN492b": return "E";
    case "DYN612": return "-";
    case "DUMMY":
    case "DUMMYDISHONORED":
      return "C";
    default: return "";
  }
}

function CardSubType($cardID)
{
  global $CID_BloodRotPox, $CID_Frailty, $CID_Inertia;
  if(!$cardID) return "";
  $set = CardSet($cardID);
  if($set != "ROG" && $set != "DUM") {
    $number = intval(substr($cardID, 3));
    if($number < 400) return GeneratedCardSubtype($cardID);
    else if($set != "MON" && $set != "DYN" && $cardID != "UPR551") return GeneratedCardSubtype($cardID);
  }
  if($set == "ROG") return ROGUECardSubtype($cardID);
  switch($cardID) {
    default:
      case "MON400": return "Chest";
      case "MON401": return "Arms";
      case "MON402": return "Legs";
      case "UPR551": return "Ally";
      case "DYN612": return "Angel,Ally";
      return "";
  }
}

function CharacterHealth($cardID)
{
  $set = CardSet($cardID);
  if($set != "ROG" && $set != "DUM") return GeneratedCharacterHealth($cardID);
  switch($cardID) {
    case "DUMMY": return 1000;
    case "ROGUE001": return 6;
    case "ROGUE003": return 8;
    case "ROGUE004": return 14;
    case "ROGUE008": return 20;
    case "ROGUE006": return 14;
    case "ROGUE009": return 10;
    case "ROGUE010": return 14;
    case "ROGUE013": return 14;
    case "ROGUE014": return 6;
    case "ROGUE015": return 13;
    case "ROGUE016": return 8;
    case "ROGUE017": return 20;
    case "ROGUE018": return 10;
    case "ROGUE019": return 18;
    case "ROGUE020": return 6;
    case "ROGUE021": return 8;
    case "ROGUE022": return 10;
    case "ROGUE023": return 12;
    case "ROGUE024": return 15;
    case "ROGUE025": return 20;
    case "ROGUE026": return 99;
    case "ROGUE027": return 6;
    case "ROGUE028": return 14;
    case "ROGUE029": return 16;
    case "ROGUE030": return 14;
    case "ROGUE031": return 16;
    default: return 20;
  }
}

function CharacterIntellect($cardID)
{
  $cardID = ShiyanaCharacter($cardID);
  switch($cardID) {
    case "CRU099": return 3;
    case "ROGUE001": return 3;
    case "ROGUE003": return 3;
    case "ROGUE004": return 3;
    case "ROGUE008": return 4;
    case "ROGUE006": return 3;
    case "ROGUE009": return 3;
    case "ROGUE010": return 4;
    case "ROGUE013": return 4;
    case "ROGUE014": return 3;
    case "ROGUE015": return 0;
    case "ROGUE016": return 3;
    case "ROGUE017": return 0;
    case "ROGUE018": return 4;
    case "ROGUE019": return 1;
    case "ROGUE020": return 3;
    case "ROGUE021": return 1;
    case "ROGUE022": return 3;
    case "ROGUE023": return 3;
    case "ROGUE024": return 3;
    case "ROGUE025": return 4;
    case "ROGUE026": return 3;
    case "ROGUE027": return 3;
    case "ROGUE028": return 4;
    case "ROGUE029": return 4;
    case "ROGUE030": return 4;
    case "ROGUE031": return 4;
    default: return 4;
  }
}

function CardSet($cardID)
{
  if(!$cardID) return "";
  return substr($cardID, 0, 3);
}

function CardClass($cardID)
{
  if(!$cardID) return "";
  $number = intval(substr($cardID, 3));
  if($number >= 400)
  {
    $set = substr($cardID, 0, 3);
    switch($set)
    {
      case "MON":
        if($number == 404) return "ILLUSIONIST";
        else if($number == 405) return "WARRIOR";
        else if($number == 406) return "BRUTE";
        else if($number == 407) return "RUNEBLADE";
        else return "NONE";
      case "UPR":
        if($number >= 406 && $number <= 417) return "ILLUSIONIST";
        else if($number >= 439 && $number <= 441) return "ILLUSIONIST";
        else if($number == 551) return "ILLUSIONIST";
        else return "NONE";
      case "DYN":
        if($number == 612) return "ILLUSIONIST";
        else return "NONE";
    }
  }
  return GeneratedCardClass($cardID);
}

function CardTalent($cardID)
{
  $set = substr($cardID, 0, 3);
  if($set == "ROG") return ROGUECardTalent($cardID);
  $number = intval(substr($cardID, 3));
  if($number >= 400)
  {
    switch($set)
    {
      case "MON":
        if($number == 520) return "SHADOW";
        else return "NONE";
      case "UPR":
        if($number >= 406 && $number <= 417 ) return "DRACONIC";
        else if($number >= 439 && $number <= 441) return "DRACONIC";
        else return "NONE";
      case "DYN":
        if($number == 612) return "LIGHT";
        else return "NONE";
    }
  }
  return GeneratedCardTalent($cardID);
}

//Minimum cost of the card
function CardCost($cardID)
{
  $cardID = ShiyanaCharacter($cardID);
  $set = CardSet($cardID);
  $class = CardClass($cardID);
  switch($cardID)
  {
    case "ARC009": return 0;
    case "MON231": return 0;
    case "EVR022": return 3;
    case "EVR124": return 0;
    case "UPR109": return 0;
    default: break;
  }
  if($set != "ROG" && $set != "DUM") {
    return GeneratedCardCost($cardID);
  }
  if($set == "ROG") return ROGUECardCost($cardID);
}

function AbilityCost($cardID)
{
  global $currentPlayer;
  $cardID = ShiyanaCharacter($cardID);
  $set = CardSet($cardID);
  $class = CardClass($cardID);
  $subtype = CardSubtype($cardID);
  if($class == "ILLUSIONIST" && $subtype == "Aura") {
    if(SearchCharacterForCard($currentPlayer, "MON003")) return 0;
    if(SearchCharacterForCard($currentPlayer, "MON088")) return 3;
    if(SearchCharacterForCard($currentPlayer, "DTD216")) return 2;
  }
  if(DelimStringContains($subtype, "Dragon") && SearchCharacterActive($currentPlayer, "UPR003")) return 0;
  if($set == "WTR") return WTRAbilityCost($cardID);
  else if($set == "ARC") return ARCAbilityCost($cardID);
  else if($set == "CRU") return CRUAbilityCost($cardID);
  else if($set == "MON") return MONAbilityCost($cardID);
  else if($set == "ELE") return ELEAbilityCost($cardID);
  else if($set == "EVR") return EVRAbilityCost($cardID);
  else if($set == "UPR") return UPRAbilityCost($cardID);
  else if($set == "DVR") return DVRAbilityCost($cardID);
  else if($set == "RVD") return RVDAbilityCost($cardID);
  else if($set == "DYN") return DYNAbilityCost($cardID);
  else if($set == "OUT") return OUTAbilityCost($cardID);
  else if($set == "DTD") return DTDAbilityCost($cardID);
  else if($set == "TCC") return TCCAbilityCost($cardID);
  else if($set == "EVO") return EVOAbilityCost($cardID);
  else if($set == "ROG") return ROGUEAbilityCost($cardID);
  return CardCost($cardID);
}

function DynamicCost($cardID)
{
  global $currentPlayer;
  switch($cardID) {
    case "WTR051": case "WTR052": case "WTR053": return "0,4";
    case "ARC009": return "0,2,4,6,8,10,12";
    case "MON231": return "0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40";
    case "EVR022": return "0,1,2,3,4,5,6,7,8,9,10,11,12";
    case "EVR124": return GetIndices(SearchCount(SearchAura(($currentPlayer == 1 ? 2 : 1), "", "", 0)) + 1);
    case "UPR109": return "0,2,4,6,8,10,12,14,16,18,20";
    default: return "";
  }
}

function PitchValue($cardID)
{
  if(!$cardID) return "";
  $set = CardSet($cardID);
  if($set != "ROG" && $set != "DUM") {
    return GeneratedPitchValue($cardID);
  }
  if($set == "ROG") return ROGUEPitchValue($cardID);
}

function BlockValue($cardID)
{
  global $defPlayer, $CS_Num6PowBan;
  if(!$cardID) return "";
  $set = CardSet($cardID);
  if($cardID == "MON191") return SearchPitchForNumCosts($defPlayer) * 2;
  else if($cardID == "EVR138") return FractalReplicationStats("Block");
  else if($cardID == "DTD107") return GetClassState($defPlayer, $CS_Num6PowBan) > 0 ? 6 : 0;
  if($set != "ROG" && $set != "DUM") {
    $number = intval(substr($cardID, 3));
    if($number < 400 || ($set != "MON" && $set != "DYN")) return GeneratedBlockValue($cardID);
  }
  $class = CardClass($cardID);
  if($set == "ROG") return ROGUEBlockValue($cardID);
  switch($cardID) {
    case "MON400": case "MON401": case "MON402": return 0;
    case "DYN492a": return -1;
    case "DYN492b": return 5;
    case "DUMMYDISHONORED": return -1;
    default: return 3;
  }
}

function AttackValue($cardID)
{
  global $combatChainState, $CCS_NumBoosted, $mainPlayer, $currentPlayer, $CS_Num6PowBan;
  if(!$cardID) return "";
  $set = CardSet($cardID);
  $class = CardClass($cardID);
  $subtype = CardSubtype($cardID);
  if($class == "ILLUSIONIST" && $subtype == "Aura") {
    if(SearchCharacterForCard($mainPlayer, "MON003")) return 1;
    if(SearchCharacterForCard($mainPlayer, "MON088")) return 4;
    if(SearchCharacterForCard($mainPlayer, "DTD216")) return 5;
  }
  if($cardID == "CRU101") return 1 + $combatChainState[$CCS_NumBoosted];
  else if($cardID == "MON191") return SearchPitchForNumCosts($mainPlayer) * 2;
  else if($cardID == "EVR138") return FractalReplicationStats("Attack");
  else if($cardID == "DYN216") return CountAura("MON104", $currentPlayer);
  else if($cardID == "DTD107") return GetClassState($mainPlayer, $CS_Num6PowBan) > 0 ? 6 : 0;
  if($set != "ROG" && $set != "DUM") {
    $number = intval(substr($cardID, 3));
    if($number < 400 || ($set != "MON" && $set != "DYN")) return GeneratedAttackValue($cardID);
  }
  if($set == "ROG") return ROGUEAttackValue($cardID);
  switch ($cardID) {
    case "DYN492a": return 5;
    case "DYN612": return 4;
    default: return 0;
  }
}

function HasGoAgain($cardID)
{
  $set = CardSet($cardID);
  if($set == "ROG") return ROGUEHasGoAgain($cardID);
  else return GeneratedGoAgain($cardID);
}

function GetAbilityType($cardID, $index = -1, $from="-")
{
  global $currentPlayer;
  $cardID = ShiyanaCharacter($cardID);
  $set = CardSet($cardID);
  $subtype = CardSubtype($cardID);
  if($from == "PLAY" && ClassContains($cardID, "ILLUSIONIST", $currentPlayer) && $subtype == "Aura") {
    if(SearchCharacterForCard($currentPlayer, "MON003") || SearchCharacterForCard($currentPlayer, "MON088") || SearchCharacterForCard($currentPlayer, "DTD216")) return "AA";
  }
  if(DelimStringContains($subtype, "Dragon") && SearchCharacterActive($currentPlayer, "UPR003")) return "AA";
  if($set == "WTR") return WTRAbilityType($cardID, $index);
  else if($set == "ARC") return ARCAbilityType($cardID, $index);
  else if($set == "CRU") return CRUAbilityType($cardID, $index);
  else if($set == "MON") return MONAbilityType($cardID, $index);
  else if($set == "ELE") return ELEAbilityType($cardID, $index);
  else if($set == "EVR") return EVRAbilityType($cardID, $index);
  else if($set == "UPR") return UPRAbilityType($cardID, $index);
  else if($set == "DVR") return DVRAbilityType($cardID, $index);
  else if($set == "RVD") return RVDAbilityType($cardID, $index);
  else if($set == "DYN") return DYNAbilityType($cardID, $index);
  else if($set == "OUT") return OUTAbilityType($cardID, $index);
  else if($set == "DTD") return DTDAbilityType($cardID, $index);
  else if($set == "TCC") return TCCAbilityType($cardID, $index);
  else if($set == "EVO") return EVOAbilityType($cardID, $index);
  else if($set == "ROG") return ROGUEAbilityType($cardID, $index);
}

function GetAbilityTypes($cardID)
{
  switch($cardID) {
    case "ARC003": case "CRU101": return "A,AA";
    case "OUT093": return "I,I";
    default: return "";
  }
}

function GetAbilityNames($cardID, $index = -1)
{
  global $currentPlayer;
  switch ($cardID) {
    case "ARC003": case "CRU101":
      $character = &GetPlayerCharacter($currentPlayer);
      if($index == -1) return "";
      $rv = "Add_a_steam_counter";
      if($character[$index + 2] > 0) $rv .= ",Attack";
      return $rv;
    case "OUT093": return "Load,Aim";
    default: return "";
  }
}

function GetAbilityIndex($cardID, $index, $abilityName)
{
  $names = explode(",", GetAbilityNames($cardID, $index));
  for($i = 0; $i < count($names); ++$i) {
    if($abilityName == $names[$i]) return $i;
  }
  return 0;
}

function GetResolvedAbilityType($cardID, $from="-")
{
  global $currentPlayer, $CS_AbilityIndex;
  $abilityIndex = GetClassState($currentPlayer, $CS_AbilityIndex);
  $abilityTypes = GetAbilityTypes($cardID);
  if($abilityTypes == "" || $abilityIndex == "-") return GetAbilityType($cardID, -1, $from);
  $abilityTypes = explode(",", $abilityTypes);
  return $abilityTypes[$abilityIndex];
}

function GetResolvedAbilityName($cardID, $from="-")
{
  global $currentPlayer, $CS_AbilityIndex;
  $abilityIndex = GetClassState($currentPlayer, $CS_AbilityIndex);
  $abilityNames = GetAbilityNames($cardID);
  if($abilityNames == "" || $abilityIndex == "-") return "";
  $abilityNames = explode(",", $abilityNames);
  return $abilityNames[$abilityIndex];
}

function IsPlayable($cardID, $phase, $from, $index = -1, &$restriction = null, $player = "")
{
  global $currentPlayer, $CS_NumActionsPlayed, $combatChainState, $CCS_BaseAttackDefenseMax, $CS_NumNonAttackCards, $CS_NumAttackCards;
  global $CCS_ResourceCostDefenseMin, $CCS_CardTypeDefenseRequirement, $actionPoints, $mainPlayer, $defPlayer;
  global $CombatChain;
  if($player == "") $player = $currentPlayer;
  $myArsenal = &GetArsenal($player);
  $myAllies = &GetAllies($player);
  $character = &GetPlayerCharacter($player);
  $myHand = &GetHand($player);
  $banish = new Banish($player);
  $restriction = "";
  $cardType = CardType($cardID);
  $subtype = CardSubType($cardID);
  $abilityType = GetAbilityType($cardID, $index, $from);
  if($phase == "P" && $from != "HAND") return false;
  if($phase == "B" && $from == "BANISH") return false;
  if($from == "BANISH") {
    $banishCard = $banish->Card($index);
    if(!(PlayableFromBanish($banishCard->ID(), $banishCard->Modifier()) || AbilityPlayableFromBanish($banishCard->ID()))) return false;
  }
  if($from == "DECK" && ($character[1] < 2 || $character[0] != "EVO001" && $character[0] != "EVO002" || CardCost($cardID) > 1 || !SubtypeContains($cardID, "Item", $player) || !ClassContains($cardID, "MECHANOLOGIST", $player))) return false;
  if($phase == "B" && $cardType == "E" && $character[$index+6] == 1) { $restriction = "On combat chain"; return false; }
  if($phase != "B" && $from == "CHAR" && $character[$index+1] != "2") return false;
  if($from == "CHAR" && $phase != "B" && $character[$index+8] == "1") { $restriction = "Frozen"; return false; }
  if($from == "PLAY" && $subtype == "Ally" && $phase != "B" && isset($myAllies[$index + 3]) && $myAllies[$index + 3] == "1") { $restriction = "Frozen"; return false; }
  if($from == "ARS" && $phase != "B" && $myArsenal[$index + 4] == "1") { $restriction = "Frozen"; return false; }
  if($phase != "P" && $cardType == "DR" && IsAllyAttackTarget() && $currentPlayer != $mainPlayer) return false;
  if($phase != "P" && $cardType == "AR" && IsAllyAttacking() && $currentPlayer == $mainPlayer) return false;
  if($CombatChain->HasCurrentLink() && ($phase == "B" || (($phase == "D" || $phase == "INSTANT") && $cardType == "DR")) && $from == "HAND") {
    if(CachedDominateActive() && CachedNumDefendedFromHand() >= 1) return false;
    if(CachedOverpowerActive() && CachedNumActionBlocked() >= 1 && ($cardType == "A" || $cardType == "AA")) return false;
    if(CachedTotalAttack() <= 2 && (SearchCharacterForCard($mainPlayer, "CRU047") || SearchCurrentTurnEffects("CRU047-SHIYANA", $mainPlayer)) && (SearchCharacterActive($mainPlayer, "CRU047") || SearchCharacterActive($mainPlayer, "CRU097")) && CardType($CombatChain->AttackCard()->ID()) == "AA") return false;
  }
  if($phase == "B" && $from == "ARS" && !(($cardType == "AA" && SearchCurrentTurnEffects("ARC160-2", $player)) || $cardID == "OUT184")) return false;
  if($phase == "B" || $phase == "D") {
    if($cardType == "AA") {
      $baseAttackMax = $combatChainState[$CCS_BaseAttackDefenseMax];
      if($baseAttackMax > -1 && AttackValue($cardID) > $baseAttackMax) return false;
    }
    if($CombatChain->AttackCard()->ID() == "DYN121" && $phase == "B") return SearchBanishForCard($player, $cardID) == -1;
    $resourceMin = $combatChainState[$CCS_ResourceCostDefenseMin];
    if($resourceMin > -1 && CardCost($cardID) < $resourceMin && $cardType != "E") return false;
    if($combatChainState[$CCS_CardTypeDefenseRequirement] == "Attack_Action" && $cardType != "AA") return false;
    if($combatChainState[$CCS_CardTypeDefenseRequirement] == "Non-attack_Action" && $cardType != "A") return false;
    if($CombatChain->AttackCard()->ID() == "DYN121" && $cardType == "DR") return SearchBanishForCard($player, $cardID) == -1;
  }
  if($from != "PLAY" && $phase == "B" && $cardType != "DR") return BlockValue($cardID) > -1;
  if(($phase == "P" || $phase == "CHOOSEHANDCANCEL") && IsPitchRestricted($cardID, $restriction, $from, $index)) return false;
  if($from != "PLAY" && $phase == "P" && PitchValue($cardID) > 0) return true;
  $isStaticType = IsStaticType($cardType, $from, $cardID);
  if($isStaticType) $cardType = GetAbilityType($cardID, $index, $from);
  if($cardType == "") return false;
  if(RequiresDiscard($cardID) || $cardID == "WTR159") {
    if($from == "HAND" && count($myHand) < 2) return false;
    else if(count($myHand) < 1) return false;
  }
  if($phase != "B" && $phase != "P" && IsPlayRestricted($cardID, $restriction, $from, $index, $player)) return false;
  if($phase == "M" && $subtype == "Arrow") {
    if($from != "ARS") return false;
    if(!SubtypeContains($character[CharacterPieces()], "Bow") && !SubtypeContains($character[CharacterPieces()*2], "Bow")) return false;
  }
  if(SearchCurrentTurnEffects("ARC044", $player) && !$isStaticType && $from != "ARS") return false;
  if(SearchCurrentTurnEffects("ARC043", $player) && ($cardType == "A" || $cardType == "AA") && GetClassState($player, $CS_NumActionsPlayed) >= 1) return false;
  if(SearchCurrentTurnEffects("DYN154", $player) && !$isStaticType && $cardType == "A" && GetClassState($player, $CS_NumNonAttackCards) >= 1) return false;
  if(SearchCurrentTurnEffects("DYN154", $player) && !$isStaticType && $cardType == "AA" && GetClassState($player, $CS_NumAttackCards) >= 1) return false;
  if($CombatChain->HasCurrentLink()) if ($CombatChain->AttackCard()->ID() == "MON245" && $player == $defPlayer && !ExudeConfidenceReactionsPlayable() && ($abilityType == "I" || $cardType == "I")) return false;
  if(SearchCurrentTurnEffects("MON245", $mainPlayer) && $player == $defPlayer && !ExudeConfidenceReactionsPlayable() && ($abilityType == "I" || $cardType == "I")) return false;
  if(($cardType == "I" || CanPlayAsInstant($cardID, $index, $from)) && CanPlayInstant($phase)) return true;
  if($from == "CC" && AbilityPlayableFromCombatChain($cardID)) return true;
  if(($cardType == "A" || $cardType == "AA") && $actionPoints < 1) return false;
  switch($cardType) {
    case "A": return $phase == "M";
    case "AA": return $phase == "M";
    case "AR": return $phase == "A";
    case "DR":
      if($phase != "D") return false;
      if(!IsDefenseReactionPlayable($cardID, $from)) { $restriction = "Defense reaction not playable."; return false; }
      return true;
    default: return false;
  }
}

function GoesWhereAfterResolving($cardID, $from = null, $player = "", $playedFrom="")
{
  global $currentPlayer, $CS_NumWizardNonAttack, $CS_NumBoosted, $mainPlayer;
  if($player == "") $player = $currentPlayer;
  $otherPlayer = $player == 2 ? 1 : 2;
  if(($from == "COMBATCHAIN" || $from == "CHAINCLOSING") && $player != $mainPlayer && CardType($cardID) != "DR") return "GY"; //If it was blocking, don't put it where it would go if it was played
  $subtype = CardSubType($cardID);
  if(DelimStringContains($subtype, "Invocation") || DelimStringContains($subtype, "Ash") || $cardID == "UPR439" || $cardID == "UPR440" || $cardID == "UPR441") return "-";
  switch($cardID) {
    case "WTR163": return "BANISH";
    case "CRU163": return GetClassState($player, $CS_NumWizardNonAttack) >= 2 ? "HAND" : "GY";
    case "MON063": return ($from == "CHAINCLOSING" ? "SOUL" : "GY");
    case "MON064": return "SOUL";
    case "MON231": return "BANISH";
    case "ELE113": return "BANISH";
    case "ELE119": case "ELE120": case "ELE121": return ($playedFrom == "ARS" && $from == "CHAINCLOSING" ? "BOTDECK" : "GY");
    case "ELE140": case "ELE141": case "ELE142": return "BANISH";
    case "MON066": case "MON067": case "MON068": return ($from == "CHAINCLOSING" && SearchCurrentTurnEffects($cardID, $mainPlayer) ? "SOUL" : "GY");
    case "MON087":
      $theirChar = &GetPlayerCharacter($otherPlayer);
      return (PlayerHasLessHealth($player) && TalentContains($theirChar[0], "SHADOW") ? "SOUL" : "GY");
    case "MON192": return ($from == "BANISH" ? "HAND" : "GY");
    case "EVR082": case "EVR083": case "EVR084": return (GetClassState($player, $CS_NumBoosted) > 0 ? "BOTDECK" : "GY");
    case "EVR134": case "EVR135": case "EVR136": return ($player != $mainPlayer ? "BOTDECK" : "GY");
    case "UPR160":
      if($from == "COMBATCHAIN" && !SearchCurrentTurnEffects($cardID, $player)) {
        AddCurrentTurnEffect($cardID, $player);
        return "BANISH,TCC";
      } else SearchCurrentTurnEffects($cardID, $player, 1);
      return "GY";
    case "DTD202": return "BANISH";
    default: return "GY";
  }
}

function CanPlayInstant($phase)
{
  if($phase == "M") return true;
  if($phase == "A") return true;
  if($phase == "D") return true;
  if($phase == "INSTANT") return true;
  return false;
}

function IsPitchRestricted($cardID, &$restriction, $from = "", $index = -1)
{
  global $playerID;
  if(SearchCurrentTurnEffects("ELE035-3", $playerID) && CardCost($cardID) == 0) { $restriction = "ELE035"; return true; }
  $pitchValue = PitchValue($cardID);
  if($pitchValue == 1 && SearchCurrentTurnEffects("OUT101-1", $playerID)) { $restriction = "OUT101"; return true; }
  else if($pitchValue == 2 && SearchCurrentTurnEffects("OUT101-2", $playerID)) { $restriction = "OUT101"; return true; }
  else if($pitchValue == 3 && SearchCurrentTurnEffects("OUT101-3", $playerID)) { $restriction = "OUT101"; return true; }
  return false;
}

function IsPlayRestricted($cardID, &$restriction, $from = "", $index = -1, $player = "")
{
  global $CS_NumBoosted, $combatChain, $CombatChain, $currentPlayer, $mainPlayer, $CS_Num6PowBan;
  global $CS_DamageTaken, $CS_NumFusedEarth, $CS_NumFusedIce, $CS_NumFusedLightning, $CS_NumNonAttackCards, $CS_DamageDealt, $CS_NumAttacks, $defPlayer, $CS_NumCardsPlayed;
  global $CS_NumAttackCards, $CS_NumBloodDebtPlayed, $layers, $CS_HitsWithWeapon, $CS_AtksWWeapon, $CS_CardsEnteredGY, $turn, $CS_NumRedPlayed, $CS_NumPhantasmAADestroyed;
  global $CS_NamesOfCardsPlayed, $CS_Num6PowDisc, $CS_HighestRoll;
  if($player == "") $player = $currentPlayer;
  $otherPlayer = ($currentPlayer == 1 ? 2 : 1);
  $character = &GetPlayerCharacter($player);
  $myHand = &GetHand($player);
  $myArsenal = &GetArsenal($player);
  $myItems = &GetItems($player);
  $mySoul = &GetSoul($player);
  $discard = new Discard($player);
  if(SearchCurrentTurnEffects("CRU032", $player) && CardType($cardID) == "AA" && AttackValue($cardID) <= 3) { $restriction = "CRU032"; return true; }
  if(SearchCurrentTurnEffects("MON007", $player) && $from == "BANISH") { $restriction = "MON007"; return true; }
  if(SearchCurrentTurnEffects("ELE036", $player) && CardType($cardID) == "E") { $restriction = "ELE036"; return true; }
  if(SearchCurrentTurnEffects("ELE035-3", $player) && CardCost($cardID) == 0 && !IsStaticType(CardType($cardID), $from, $cardID)) { $restriction = "ELE035"; return true; }
  if(CardType($cardID) == "A" && $from != "PLAY" && GetClassState($player, $CS_NumNonAttackCards) >= 1 && (SearchItemsForCard("EVR071", 1) != "" || SearchItemsForCard("EVR071", 2) != "")) { $restriction = "EVR071"; return true; }
  if($turn[0] != "B" && $turn[0] != "P" && $player != $mainPlayer && SearchAlliesActive($mainPlayer, "UPR415")) { $restriction = "UPR415"; return true; }
  switch($cardID) {
    case "WTR080": return !$CombatChain->HasCurrentLink() || !HasCombo($CombatChain->AttackCard()->ID());
    case "WTR082": return !$CombatChain->HasCurrentLink() || !ClassContains($CombatChain->AttackCard()->ID(), "NINJA", $player) || CardType($CombatChain->AttackCard()->ID()) != "AA";
    case "WTR116": return GetClassState($player, $CS_HitsWithWeapon) == 0;
    case "WTR120": case "WTR121": case "WTR123": case "WTR124": case "WTR125": case "WTR118":
    case "WTR135": case "WTR136": case "WTR137": case "WTR138": case "WTR139": case "WTR140": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "W";
    case "WTR132": case "WTR133": case "WTR134":
      if(!$CombatChain->HasCurrentLink()) return true;
      if(!RepriseActive()) return false;
      return CardType($CombatChain->AttackCard()->ID()) != "W";
    case "WTR150": return $character[$index + 2] < 3;
    case "WTR154":
      if(!$CombatChain->HasCurrentLink()) return true;
      if(CardType($CombatChain->AttackCard()->ID()) != "AA") return true;
      if(CardCost($CombatChain->AttackCard()->ID()) > 1) return true;
      return false;
    case "WTR206": case "WTR207": case "WTR208":
      if(!$CombatChain->HasCurrentLink()) return true;
      $subtype = CardSubtype($CombatChain->AttackCard()->ID());
      if($subtype == "Club" || $subtype == "Hammer" || (CardType($CombatChain->AttackCard()->ID()) == "AA" && CardCost($CombatChain->AttackCard()->ID()) >= 2)) return false;
      return true;
    case "WTR209": case "WTR210": case "WTR211":
      if(!$CombatChain->HasCurrentLink()) return true;
      $subtype = CardSubtype($CombatChain->AttackCard()->ID());
      if($subtype == "Sword" || $subtype == "Dagger" || (CardType($CombatChain->AttackCard()->ID()) == "AA" && CardCost($CombatChain->AttackCard()->ID()) <= 1)) return false;
      return true;
    case "ARC004": return GetClassState($player, $CS_NumBoosted) < 1;
    case "ARC005": return GetClassState($player, $CS_NumBoosted) < 1;
    case "ARC008": return GetClassState($player, $CS_NumBoosted) < 3;
    case "ARC010": return ($CombatChain->HasCurrentLink() && $from == "PLAY" && ClassContains($CombatChain->AttackCard()->ID(), "MECHANOLOGIST", $player) && ($myItems[$index + 1] == 0 || CardSubtype($CombatChain->AttackCard()->ID()) != "Pistol" || $myItems[$index + 2] != 2));
    case "ARC018": return ($CombatChain->HasCurrentLink() && $from == "PLAY" && ($myItems[$index+1] == 0 || CardType($CombatChain->AttackCard()->ID()) != "AA" || $myItems[$index+2] != 2));
    case "ARC041": return !ArsenalHasFaceDownCard($player);
    case "CRU082": case "CRU083": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "W";
    case "CRU088": case "CRU089": case "CRU090": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "W";
    case "CRU097": return IsPlayRestricted(ShiyanaCharacter("CRU097"), $restriction, $from, $index, $player);
    case "CRU125": return !HasTakenDamage($player);
    case "CRU126": case "CRU127": case "CRU128": return $from != "ARS";
    case "CRU143": return SearchCount(SearchDiscard($player, "AA", "", -1, -1, "RUNEBLADE")) == 0;
    case "CRU164": return count($layers) == 0 || SearchLayer($player, "I", "", 1) == "";
    case "CRU186": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "AA";
    case "CRU189": case "CRU190": case "CRU191":
      $found = SearchCombatChainLink($player, "AA");
      return $found == "" || $found == "0";
    case "MON000": return $from == "PLAY" && SearchCount(SearchHand($player, "", "", -1, -1, "", "", false, false, 2)) < 2;
    case "MON001": case "MON002": return count($mySoul) == 0;
    case "MON029": case "MON030": return count($mySoul) == 0 || !HasIncreasedAttack();
    case "MON033": return count($mySoul) == 0;
    case "MON062": return count($mySoul) < 3;
    case "MON084": case "MON085": case "MON086": return !$CombatChain->HasCurrentLink();
    case "MON144": case "MON145": case "MON146": return GetClassState($player, $CS_Num6PowBan) == 0;
    case "MON126": case "MON127": case "MON128":
    case "MON129": case "MON130": case "MON131":
    case "MON132": case "MON133": case "MON134":
    case "MON135": case "MON136": case "MON137":
    case "MON141": case "MON142": case "MON143":
    case "MON147": case "MON148": case "MON149":
    case "MON150": case "MON151": case "MON152":
      return $discard->NumCards() < 3;
    case "MON189": return SearchCount(SearchBanish($player, "", "", -1, -1, "", "", true)) < 6;
    case "MON190": return GetClassState($player, $CS_NumBloodDebtPlayed) < 6;
    case "MON198": return $discard->NumCards() < 6;
    case "MON230": return GetClassState($player, $CS_NumAttackCards) == 0 || GetClassState($player, $CS_NumNonAttackCards) == 0;
    case "MON238": return GetClassState($player, $CS_DamageTaken) == 0 && GetClassState($otherPlayer, $CS_DamageTaken) == 0;
    case "MON281": case "MON282": case "MON283": return SearchCurrentTurnEffects($cardID, $player);
    case "ELE031": case "ELE032": case "ELE115": return !ArsenalHasFaceDownCard($player);
    case "ELE118": return $from == "ARS" || ArsenalEmpty($player);
    case "ELE125": case "ELE126": case "ELE127":
      $found = CombineSearches(SearchCombatChainLink($defPlayer, "A", talent: "EARTH,ELEMENTAL"), SearchCombatChainLink($defPlayer, "AA", talent: "EARTH,ELEMENTAL"));
      return $found == "" || $found == "0";
    case "ELE140": case "ELE141": case "ELE142": return SowTomorrowIndices($player, $cardID) == "";
    case "ELE143": return $from == "PLAY" && GetClassState($player, $CS_NumFusedEarth) == 0;
    case "ELE147":
      if($CombatChain->HasCurrentLink()) return false;//If there's an attack, there's a valid target
      if(count($layers) == 0) return true;//If there's no attack, and no layers, nothing to do
      $layerIndex = count($layers) - LayerPieces();//Only the earliest layer can be an attack
      $layerID = $layers[$layerIndex];
      if(strlen($layerID) != 6) return true;//Game phase, not a card - sorta hacky
      $layerType = CardType($layerID);
      if($layerType == "AA" || $layerType == "W") return false;//It's an attack
      if(GetResolvedAbilityType($layers[$layerIndex]) == "AA") return false;
      return true;
    case "ELE172": return $from == "PLAY" && GetClassState($player, $CS_NumFusedIce) == 0;
    case "ELE183": case "ELE184": case "ELE185":
      if(count($layers) == 0 && !$CombatChain->HasCurrentLink()) return true;
      if(SearchCount(SearchCombatChainLink($currentPlayer, type:"AA", maxCost:1)) > 0) return false;
      for($i = 0; $i < count($layers); $i += LayerPieces()) {
        if(strlen($layers[$i]) == 6 && CardType($layers[$i]) == "AA" && CardCost($layers[$i]) <= 1) return false;
      }
      return true;
    case "ELE195": case "ELE196": case "ELE197": return SearchCurrentTurnEffects($cardID, $player);
    case "ELE201": return $from == "PLAY" && GetClassState($player, $CS_NumFusedLightning) == 0;
    case "ELE224": return GetClassState($player, $CS_NumAttackCards) == 0; // Blocked/Played
    case "ELE225": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "AA" || GetClassState($currentPlayer, $CS_NumNonAttackCards) == 0;
    case "ELE233": return count($myHand) != 1;
    case "ELE234": return count($myHand) == 0;
    case "ELE236": return !HasTakenDamage($player);
    case "EVR054": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "W" || Is1H($CombatChain->AttackCard()->ID());
    case "EVR060": case "EVR061": case "EVR062": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "W" || !Is1H($CombatChain->AttackCard()->ID());
    case "EVR063": case "EVR064": case "EVR065": return GetClassState($player, $CS_AtksWWeapon) < 1;
    case "EVR137": return $player != $mainPlayer;
    case "EVR173": case "EVR174": case "EVR175": return GetClassState($player, $CS_DamageDealt) == 0;
    case "EVR176": return $from == "PLAY" && count($myHand) < 4;
    case "EVR177": return IsAmuletOfEchoesRestricted($from);
    case "EVR178": return ($from == "PLAY" && count($myHand) > 0);
    case "EVR179": return ($from == "PLAY" && GetClassState($player, $CS_NumCardsPlayed) >= 1);
    case "EVR053": return !IsWeaponGreaterThanTwiceBasePower();
    case "EVR181": return $from == "PLAY" && (GetClassState(1, $CS_CardsEnteredGY) == 0 && GetClassState(2, $CS_CardsEnteredGY) == 0 || !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "AA");
    case "DVR013": return (!$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "W" || CardSubType($CombatChain->AttackCard()->ID()) != "Sword");
    case "DVR014": case "DVR023": return !$CombatChain->HasCurrentLink() || CardSubType($CombatChain->AttackCard()->ID()) != "Sword";
    case "UPR050": return (!$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "AA" || (!ClassContains($CombatChain->AttackCard()->ID(), "NINJA", $player) && !TalentContains($CombatChain->AttackCard()->ID(), "DRACONIC", $currentPlayer)));
    case "UPR084": return GetClassState($player, $CS_NumRedPlayed) == 0;
    case "UPR085": return GetClassState($player, $CS_NumRedPlayed) == 0;
    case "UPR087": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "AA";
    case "UPR089": return ($player != $mainPlayer || NumDraconicChainLinks() < 4);
    case "UPR151": return ($character[$index + 2] < 2 && !SearchCurrentTurnEffects($cardID, $player));
    case "UPR153": return GetClassState($player, $CS_NumPhantasmAADestroyed) < 1;
    case "UPR154":
      if($CombatChain->HasCurrentLink()) return !(CardType($CombatChain->AttackCard()->ID()) == "AA" || DelimStringContains(CardSubType($CombatChain->AttackCard()->ID()), "Ally")) || !ClassContains($CombatChain->AttackCard()->ID(), "ILLUSIONIST", $player);
      else if(count($layers) != 0) return !(CardType($layers[0]) == "AA" || DelimStringContains(CardSubType($layers[0]), "Ally")) || !ClassContains($layers[0], "ILLUSIONIST", $player);
      return true;
    case "UPR159": return !$CombatChain->HasCurrentLink() || AttackValue($CombatChain->AttackCard()->ID()) > 2 || CardType($CombatChain->AttackCard()->ID()) != "AA";
    case "UPR162": case "UPR163": case "UPR164": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "AA" || CardCost($CombatChain->AttackCard()->ID()) > 0;
    case "UPR165": return GetClassState($player, $CS_NumNonAttackCards) == 0;
    case "UPR166": return $character[$index + 2] < 2;
    case "UPR167": return $player == $mainPlayer;
    case "UPR169": return SearchLayer($otherPlayer, "A") == "";
    //Invocations must target Ash
    case "UPR006": case "UPR007": case "UPR008": case "UPR009": case "UPR010": case "UPR011":
    case "UPR012": case "UPR013": case "UPR014": case "UPR015": case "UPR016": case "UPR017":
    case "UPR036": case "UPR037": case "UPR038": case "UPR039": case "UPR040": case "UPR041":
      return SearchCount(SearchPermanents($player, "", "Ash")) < 1;
    case "DYN005": return count(GetHand($player)) != 0;
    case "DYN007": return GetClassState($mainPlayer, $CS_Num6PowDisc) > 0 ? 0 : 1;
    case "DYN022": case "DYN023": case "DYN024": return GetClassState($mainPlayer, $CS_Num6PowDisc) > 0 ? 0 : 1;
    case "DYN088": return $character[$index + 2] < 2;
    case "DYN079": case "DYN080": case "DYN081":
      if(!$CombatChain->HasCurrentLink()) return true;
      $subtype = CardSubType($CombatChain->AttackCard()->ID());
      return $subtype != "Sword" && $subtype != "Dagger";
    case "DYN117": return !$CombatChain->HasCurrentLink() || !ClassContains($CombatChain->AttackCard()->ID(), "ASSASSIN", $mainPlayer) || CardType($CombatChain->AttackCard()->ID()) != "AA";
    case "DYN118": return !$CombatChain->HasCurrentLink() || !ClassContains($CombatChain->AttackCard()->ID(), "ASSASSIN", $mainPlayer) || CardType($CombatChain->AttackCard()->ID()) != "AA";
    case "DYN130": case "DYN131": case "DYN132": return NumCardsBlocking() < 1 || !ClassContains($CombatChain->AttackCard()->ID(), "ASSASSIN", $mainPlayer);
    case "DYN148": case "DYN149": case "DYN150": return !$CombatChain->HasCurrentLink() || !ClassContains($CombatChain->AttackCard()->ID(), "ASSASSIN", $mainPlayer) || ContractType($CombatChain->AttackCard()->ID()) == "";
    case "DYN168": case "DYN169": case "DYN170":
      $arsenalHasFaceUp = ArsenalHasFaceUpArrowCard($mainPlayer);
      if(!$arsenalHasFaceUp) $restriction = "There must be a face up arrow in your arsenal.";
      return !$arsenalHasFaceUp;
    case "DYN212": return CountAura("MON104", $currentPlayer) < 1;
    case "DYN492a": return $character[$index + 2] <= 0;
    case "OUT001": case "OUT002": return !$CombatChain->HasCurrentLink() || !HasStealth($CombatChain->AttackCard()->ID());
    case "OUT021": case "OUT022": case "OUT023":
    case "OUT042": case "OUT043": case "OUT044":
      return !$CombatChain->HasCurrentLink() || !HasStealth($CombatChain->AttackCard()->ID());
    case "OUT054": return ($from == "PLAY" ? !$CombatChain->HasCurrentLink() || !HasCombo($CombatChain->AttackCard()->ID()) : false);
    case "OUT094": return !ArsenalHasFaceDownCard($player);
    case "OUT139":
      if(!$CombatChain->HasCurrentLink()) return false;
      if(!SearchCharacterAliveSubtype($player, "Dagger"))
      {
        $restriction = "No dagger to throw";
        return true;
      }
      return false;
    case "OUT143": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "AA" || (!ClassContains($CombatChain->AttackCard()->ID(), "ASSASSIN", $mainPlayer) && !ClassContains($CombatChain->AttackCard()->ID(), "NINJA", $mainPlayer));
    case "OUT154": case "OUT155": case "OUT156":
      if(!$CombatChain->HasCurrentLink()) return true;
      $subtype = CardSubtype($CombatChain->AttackCard()->ID());
      if($subtype == "Dagger" || (CardType($CombatChain->AttackCard()->ID()) == "AA" && AttackValue($CombatChain->AttackCard()->ID()) <= 2)) return false;
      return true;
    case "OUT162": case "OUT163": case "OUT164": return $from == "HAND";
    case "OUT168": case "OUT169": case "OUT170": return $from == "HAND";
    case "OUT180": return count($myHand) > 0;
    case "OUT181": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "AA";
    case "OUT182": return !$CombatChain->HasCurrentLink() || (CardType($CombatChain->AttackCard()->ID()) != "AA" && CardType($CombatChain->AttackCard()->ID()) != "W") || AttackValue($CombatChain->AttackCard()->ID()) > 1;
    case "DTD001": case "DTD002": return count($mySoul) == 0;
    case "DTD003": return !$CombatChain->HasCurrentLink() || (!str_contains(NameOverride($CombatChain->AttackCard()->ID(), $mainPlayer), "Herald") && !SubtypeContains($CombatChain->AttackCard()->ID(), "Angel", $mainPlayer));
    case "DTD032": case "DTD033": case "DTD034": return !$CombatChain->HasCurrentLink() || !str_contains(NameOverride($CombatChain->AttackCard()->ID(), $mainPlayer), "Herald");
    case "DTD035": case "DTD036": case "DTD037": return !$CombatChain->HasCurrentLink() || !str_contains(NameOverride($CombatChain->AttackCard()->ID(), $mainPlayer), "Herald");
    case "DTD038": case "DTD039": case "DTD040":
      return count($combatChain) < (CombatChainPieces() * 2) || !str_contains(NameOverride($CombatChain->AttackCard()->ID(), $mainPlayer), "Herald");
    case "DTD041": case "DTD042": case "DTD043":
      return count($combatChain) < (CombatChainPieces() * 2) || GetChainLinkCards($defPlayer, nameContains:"Herald") == "";
    case "DTD060": case "DTD061": case "DTD062":
      $hand = &GetHand($currentPlayer);
      return $from == "PLAY" && count($hand) == 0;
    case "DTD069": case "DTD070": case "DTD071"://Resounding Courage
      return !$CombatChain->HasCurrentLink() || !ClassContains($CombatChain->AttackCard()->ID(), "WARRIOR", $mainPlayer) || !TalentContains($CombatChain->AttackCard()->ID(), "LIGHT", $mainPlayer);
    case "DTD075": case "DTD076": case "DTD077": case "DTD078": return count($mySoul) == 0;
    case "DTD106": return SearchCount(SearchBanish($currentPlayer)) < 3;
    case "DTD142": return CountAura("ARC112", $currentPlayer) != 6;
    case "DTD164": return $from != "PLAY" || SearchCount(SearchBanish($currentPlayer, bloodDebtOnly:true)) < 13;
    case "DTD199": return GetClassState($currentPlayer, $CS_HighestRoll) != 6;
    case "DTD208": return !$CombatChain->HasCurrentLink() || CardType($CombatChain->AttackCard()->ID()) != "W";
    case "TCC011": return EvoUpgradeAmount($player) == 0;//Restricted if no EVOs
    case "TCC079": return HitsInCombatChain() < 3;
    case "EVO235": return !$CombatChain->HasCurrentLink() || !ClassContains($CombatChain->AttackCard()->ID(), "ASSASSIN", $mainPlayer) || CardType($CombatChain->AttackCard()->ID()) != "AA";
    default: return false;
  }
}

function IsDefenseReactionPlayable($cardID, $from)
{
  global $CombatChain, $mainPlayer;
  if(($CombatChain->AttackCard()->ID() == "ARC159" || $CombatChain->AttackCard()->ID() == "OUT015" || $CombatChain->AttackCard()->ID() == "OUT016" || $CombatChain->AttackCard()->ID() == "OUT017" || $CombatChain->AttackCard()->ID() == "OUT133"|| $CombatChain->AttackCard()->ID() == "OUT134" || $CombatChain->AttackCard()->ID() == "OUT135" || $CombatChain->AttackCard()->ID() == "OUT198" || $CombatChain->AttackCard()->ID() == "OUT199" || $CombatChain->AttackCard()->ID() == "OUT200") && CardType($cardID) == "DR") return false;
  if($CombatChain->AttackCard()->ID() == "MON245") if (!ExudeConfidenceReactionsPlayable()) return false;
  if($from == "HAND" && CardSubType($CombatChain->AttackCard()->ID()) == "Arrow" && SearchCharacterForCard($mainPlayer, "EVR087")) return false;
  if(CurrentEffectPreventsDefenseReaction($from)) return false;
  if(SearchCurrentTurnEffects("MON245", $mainPlayer)) return false;
  return true;
}

function IsAction($cardID)
{
  $cardType = CardType($cardID);
  if($cardType == "A" || $cardType == "AA") return true;
  $abilityType = GetAbilityType($cardID);
  if($abilityType == "A" || $abilityType == "AA") return true;
  return false;
}

function GoesOnCombatChain($phase, $cardID, $from)
{
  global $layers;
  if($phase != "B" && $from == "EQUIP" || $from == "PLAY") $cardType = GetResolvedAbilityType($cardID, $from);
  else if($phase == "M" && $cardID == "MON192" && $from == "BANISH") $cardType = GetResolvedAbilityType($cardID, $from);
  else $cardType = CardType($cardID);
  if($cardType == "I") return false; //Instants as yet never go on the combat chain
  if($phase == "B" && count($layers) == 0) return true; //Anything you play during these combat phases would go on the chain
  if(($phase == "A" || $phase == "D") && $cardType == "A") return false; //Non-attacks played as instants never go on combat chain
  if($cardType == "AR") return true;
  if($cardType == "DR") return true;
  if(($phase == "M" || $phase == "ATTACKWITHIT") && $cardType == "AA") return true; //If it's an attack action, it goes on the chain
  return false;
}

function IsStaticType($cardType, $from = "", $cardID = "")
{
  if($cardType == "C" || $cardType == "E" || $cardType == "W") return true;
  if($from == "PLAY") return true;
  if($cardID != "" && $from == "BANISH" && AbilityPlayableFromBanish($cardID)) return true;
  return false;
}

function HasBladeBreak($cardID)
{
  global $defPlayer, $CID_TekloHead, $CID_TekloChest, $CID_TekloArms, $CID_TekloLegs;
  switch($cardID) {
    case "WTR079": case "WTR150": case "WTR155": case "WTR156": case "WTR157": case "WTR158": return true;
    case "ARC041": return true;
    case "CRU122": return true;
    case "MON060": return true;
    case "ELE144": case "ELE204": case "ELE213": case "ELE224": return true;
    case "EVR037": case "EVR086": return true;
    case "DVR003": case "DVR006": return true;
    case "RVD003": return true;
    case "UPR136": case "UPR158": case "UPR182": return true;
    case "DYN045": case "DYN152": case "DYN171": return true;
    case "OUT049": case "OUT094": case "OUT099": case "OUT139": case "OUT140": case "OUT141": case "OUT157": case "OUT158": return true;
    case "MON241": case "MON242": case "MON243": case "MON244": return SearchCurrentTurnEffects($cardID, $defPlayer); //Ironhide
    case "OUT174": return SearchCurrentTurnEffects($cardID . "-BB", $defPlayer); //Vambrace of determination
    case "DTD200": return true;
    case "DTD222": case "DTD223": case "DTD224": case "DTD225": return true;
    case $CID_TekloHead: case $CID_TekloChest: case $CID_TekloArms: case $CID_TekloLegs: return true;
    default: return false;
  }
}

function HasBattleworn($cardID)
{
  switch($cardID) {
    case "WTR004": case "WTR005": case "WTR041": case "WTR042": case "WTR080": case "WTR116": case "WTR117": return true;
    case "ARC004": case "ARC078": case "ARC150": return true;
    case "CRU053": return true;
    case "MON107": case "MON108": case "MON122": case "MON230": return true;
    case "EVR001": case "EVR053": return true;
    case "DVR005": return true;
    case "DYN006": case "DYN026": case "DYN046": case "DYN089": case "DYN117": case "DYN118": return true;
    case "OUT011": return true;
    case "TCC082": case "TCC407": case "TCC408": case "TCC409": case "TCC410": return true;
    case "EVO235": return true;
    default: return false;
  }
}

function HasTemper($cardID)
{
  switch($cardID) {
    case "CRU025": case "CRU081": case "CRU141": return true;
    case "EVR018": return true;
    case "EVR020": return true;
    case "UPR084": return true;
    case "DYN027": case "DYN492b": return true;
    case "DTD047": case "DTD206": case "DTD207": case "DTD211": return true;
    case "TCC029": case "TCC030": case "TCC031": case "TCC032": case "TCC033": return true;
    case "EVO247": return true;
    default: return false;
  }
}

function RequiresDiscard($cardID)
{
  switch($cardID) {
    case "WTR006": case "WTR007": case "WTR008": case "WTR011": case "WTR012": case "WTR013": case "WTR014": case "WTR015":
    case "WTR016": case "WTR020": case "WTR021": case "WTR022": case "WTR029": case "WTR030": case "WTR031": case "WTR035":
    case "WTR036": case "WTR037":
    case "CRU010": case "CRU011": case "CRU012": case "CRU019": case "CRU020": case "CRU021":
    case "DYN007": case "DYN016": case "DYN017": case "DYN018": case "DYN019": case "DYN020": case "DYN021":
      return true;
    default: return false;
  }
}

function RequiresBanish($cardID)
{
  switch($cardID) {
    case "DTD110":
    case "DTD112": case "DTD113": case "DTD114":
    case "DTD118": case "DTD119": case "DTD120":
    case "DTD124": case "DTD125": case "DTD126":
    case "DTD127": case "DTD128": case "DTD129":
    case "DTD130": case "DTD131": case "DTD132":
      return true;
    default: return false;
  }
}

function ETASteamCounters($cardID)
{
  switch ($cardID) {
    case "ARC017": return 1;
    case "ARC007": case "ARC019": return 2;
    case "ARC036": return 3;
    case "ARC035": return 4;
    case "ARC037": return 5;
    case "CRU104": return 0;
    case "CRU105": return 0;
    case "EVR069": return 1;
    case "EVR071": return 1;
    case "EVR072": return 3;
    case "DYN093": return 5;
    case "DYN110": return 3;
    case "DYN111": return 2;
    case "DYN112": return 1;
    default: return 0;
  }
}

function AbilityHasGoAgain($cardID)
{
  global $currentPlayer;
  $cardID = ShiyanaCharacter($cardID);
  $set = CardSet($cardID);
  $class = CardClass($cardID);
  $subtype = CardSubtype($cardID);
  if($class == "ILLUSIONIST" && $subtype == "Aura" && SearchCharacterForCard($currentPlayer, "MON088")) return true;
  if($set == "WTR") return WTRAbilityHasGoAgain($cardID);
  else if($set == "ARC") return ARCAbilityHasGoAgain($cardID);
  else if($set == "CRU") return CRUAbilityHasGoAgain($cardID);
  else if($set == "MON") return MONAbilityHasGoAgain($cardID);
  else if($set == "ELE") return ELEAbilityHasGoAgain($cardID);
  else if($set == "EVR") return EVRAbilityHasGoAgain($cardID);
  else if($set == "UPR") return UPRAbilityHasGoAgain($cardID);
  else if($set == "DYN") return DYNAbilityHasGoAgain($cardID);
  else if($set == "OUT") return OUTAbilityHasGoAgain($cardID);
  else if($set == "DTD") return DTDAbilityHasGoAgain($cardID);
  else if($set == "TCC") return TCCAbilityHasGoAgain($cardID);
  else if($set == "EVO") return EVOAbilityHasGoAgain($cardID);
  else if($set == "ROG") return ROGUEAbilityHasGoAgain($cardID);
  switch($cardID) {
    case "RVD004": return true;
    case "DVR004": return true;
    default: return false;
  }
}

function DoesEffectGrantDominate($cardID)
{
  global $combatChainState, $CCS_AttackFused;
  $cardID = ShiyanaCharacter($cardID);
  switch ($cardID) {
    case "WTR038": case "WTR039": case "WTR197":
    case "ARC011": case "ARC012": case "ARC013": case "ARC019": case "ARC038": case "ARC039":
    case "CRU013": case "CRU014": case "CRU015":
    case "CRU038": case "CRU039": case "CRU040": case "CRU094-2": case "CRU095-2": case "CRU096-2":
    case "CRU106": case "CRU107": case "CRU108":
    case "MON109": case "MON129": case "MON130": case "MON131": case "MON132": case "MON133": case "MON134":
    case "MON195": case "MON196": case "MON197": case "MON223": case "MON224": case "MON225":
    case "MON278": case "MON279": case "MON280": case "MON406":
    case "ELE005": case "ELE016": case "ELE017": case "ELE018": case "ELE033-2": case "ELE056": case "ELE057": case "ELE058":
    case "ELE092-DOMATK": case "ELE097": case "ELE098": case "ELE099": case "ELE166": case "ELE167": case "ELE168": case "ELE205":
    case "EVR017": case "EVR019": case "UPR091":
    case "DYN028":
    case "ROGUE710-DO":
    case "DTD010": case "DTD410":
      return true;
    case "ELE154": case "ELE155": case "ELE156": return $combatChainState[$CCS_AttackFused] == 1;
    default: return false;
  }
}

function CharacterNumUsesPerTurn($cardID)
{
  switch ($cardID) {
    case "WTR038": case "WTR039": return 999;
    case "ELE034": return 2;
    case "UPR183": return 999;
    case "DYN001": case "DYN193": return 999;
    case "DYN492a": return 999;
    case "OUT093": return 2;
    default: return 1;
  }
}

//Active (2 = Always Active, 1 = Yes, 0 = No)
function CharacterDefaultActiveState($cardID)
{
  switch ($cardID) {
    case "WTR117": return 1;
    case "ARC152": return 1;
    case "CRU053": case "CRU161": return 1;
    case "MON122": return 1;
    case "ELE173": case "ELE174": return 1;
    case "MON061": case "MON090": case "MON188": case "MON400": case "MON401": case "MON402": return 1;
    case "DYN236": case "DYN237": case "DYN238": case "DYN239": return 1;
    case "EVR037": return 1;
    case "UPR004": case "UPR047": case "UPR125": case "UPR184": case "UPR185": case "UPR186": return 0;
    case "DYN006": return 1;
    case "DTD165": case "DTD166": case "DTD167": case "DTD168": return 0;
    case "DTD564": return 0;
    default: return 2;
  }
}

//Hold priority for triggers (2 = Always hold, 1 = Hold, 0 = Don't Hold)
function AuraDefaultHoldTriggerState($cardID)
{
  switch ($cardID) {
    case "WTR046": case "WTR047": case "WTR054": case "WTR055": case "WTR056": case "WTR069": case "WTR070": case "WTR071":
    case "WTR072": case "WTR073": case "WTR074": case "WTR075": return 0;
    case "ARC112": return 1;
    case "CRU028": case "CRU029": case "CRU030": case "CRU031": case "CRU038": case "CRU039": case "CRU040":
    case "CRU075": case "CRU144": return 0;
    case "MON186": return 0;
    case "ELE025": case "ELE026": case "ELE027": case "ELE028": case "ELE029": case "ELE030":
    case "ELE206": case "ELE207": case "ELE208": case "ELE109": case "ELE110": case "ELE111": return 0;
    case "EVR107": case "EVR108": case "EVR109": case "EVR131": case "EVR132": case "EVR133": return 0;
    case "UPR190": case "UPR218": case "UPR219": case "UPR220": return 0;
    case "DYN217": return 0;
    case "DTD233": return 0;
    default: return 2;
  }
}

function ItemDefaultHoldTriggerState($cardID)
{
  switch($cardID) {
    case "ARC007": case "ARC035":
    case "MON302":
    case "EVR069": case "EVR071":
      return 0;
    default: return 2;
  }
}

function IsCharacterActive($player, $index)
{
  $character = &GetPlayerCharacter($player);
  return $character[$index + 9] == "1";
}

function HasReprise($cardID)
{
  switch($cardID) {
    case "WTR118": case "WTR120": case "WTR121": case "WTR123": case "WTR124": case "WTR125": case "WTR132":
    case "WTR133": case "WTR134": case "WTR135": case "WTR136": case "WTR137": case "WTR138": case "WTR139": case "WTR140":
    case "CRU083": case "CRU088": case "CRU089": case "CRU090":
      return true;
    default: return false;
  }
}

//Is it active AS OF THIS MOMENT?
function RepriseActive()
{
  global $currentPlayer, $mainPlayer;
  if($currentPlayer == $mainPlayer) return CachedNumDefendedFromHand() > 0;
  else return 0;
}

function HasCombo($cardID)
{
  switch ($cardID) {
    case "WTR081": case "WTR083": case "WTR084": case "WTR085": case "WTR086": case "WTR087":
    case "WTR088": case "WTR089": case "WTR090": case "WTR091": case "WTR095": case "WTR096":
    case "WTR097": case "WTR104": case "WTR105": case "WTR106": case "WTR110": case "WTR111": case "WTR112":
      return true;
    case "CRU054": case "CRU055": case "CRU056": case "CRU057": case "CRU058": case "CRU059":
    case "CRU060": case "CRU061": case "CRU062":
      return true;
    case "EVR038": case "EVR040": case "EVR041": case "EVR042": case "EVR043":
      return true;
    case "DYN047":
    case "DYN056": case "DYN057": case "DYN058":
    case "DYN059": case "DYN060": case "DYN061":
      return true;
    case "OUT050":
    case "OUT051":
    case "OUT056": case "OUT057": case "OUT058":
    case "OUT059": case "OUT060": case "OUT061":
    case "OUT062": case "OUT063": case "OUT064":
    case "OUT065": case "OUT066": case "OUT067":
    case "OUT074": case "OUT075": case "OUT076":
    case "OUT080": case "OUT081": case "OUT082":
    case "TCC088":
      return true;
  }
  return false;
}

function ComboActive($cardID = "")
{
  global $combatChainState, $CombatChain, $chainLinkSummary, $mainPlayer;
  if(SearchCurrentTurnEffects("OUT183", $mainPlayer)) return false;
  if($cardID == "" && $CombatChain->HasCurrentLink()) $cardID = $CombatChain->AttackCard()->ID();
  if($cardID == "") return false;
  if(count($chainLinkSummary) == 0) return false;//No combat active if no previous chain links
  $lastAttackNames = explode(",", $chainLinkSummary[count($chainLinkSummary)-ChainLinkSummaryPieces()+4]);
  for($i=0; $i<count($lastAttackNames); ++$i)
  {
    $lastAttackName = GamestateUnsanitize($lastAttackNames[$i]);
    switch($cardID) {
      case "WTR081":
        if($lastAttackName == "Mugenshi: RELEASE") return true;
        break;
      case "WTR083":
        if($lastAttackName == "Whelming Gustwave") return true;
        break;
      case "WTR084":
        if($lastAttackName == "Rising Knee Thrust") return true;
        break;
      case "WTR085":
        if($lastAttackName == "Open the Center") return true;
        break;
      case "WTR086": case "WTR087": case "WTR088":
        if($lastAttackName == "Open the Center") return true;
        break;
      case "WTR089": case "WTR090": case "WTR091":
        if($lastAttackName == "Rising Knee Thrust") return true;
        break;
      case "WTR095": case "WTR096": case "WTR097":
        if($lastAttackName == "Head Jab") return true;
        break;
      case "WTR104": case "WTR105": case "WTR106":
        if($lastAttackName == "Leg Tap") return true;
        break;
      case "WTR110": case "WTR111": case "WTR112":
        if($lastAttackName == "Surging Strike") return true;
        break;
      case "CRU054":
        if($lastAttackName == "Crane Dance") return true;
        break;
      case "CRU055":
        if($lastAttackName == "Rushing River" || $lastAttackName == "Flood of Force") return true;
        break;
      case "CRU056":
        if($lastAttackName == "Crane Dance") return true;
        break;
      case "CRU057": case "CRU058": case "CRU059":
        if($lastAttackName == "Soulbead Strike") return true;
        break;
      case "CRU060": case "CRU061": case "CRU062":
        if($lastAttackName == "Torrent of Tempo") return true;
        break;
      case "EVR038":
        if($lastAttackName == "Rushing River" || $lastAttackName == "Flood of Force") return true;
        break;
      case "EVR040":
        if($lastAttackName == "Hundred Winds") return true;
        break;
      case "EVR041": case "EVR042": case "EVR043":
        if($lastAttackName == "Hundred Winds") return true;
        break;
      case "DYN047":
      case "DYN056": case "DYN057": case "DYN058":
      case "DYN059": case "DYN060": case "DYN061":
        if($lastAttackName == "Crouching Tiger") return true;
        break;
      case "OUT050":
        if($lastAttackName == "Spinning Wheel Kick") return true;
        break;
      case "OUT051":
        if($lastAttackName == "Bonds of Ancestry") return true;
        break;
      case "OUT056": case "OUT057": case "OUT058":
        if(str_contains($lastAttackName, "Gustwave")) return true;
        break;
      case "OUT059": case "OUT060": case "OUT061":
        if($lastAttackName == "Head Jab") return true;
        break;
      case "OUT062": case "OUT063": case "OUT064":
        if($lastAttackName == "Twin Twisters" || $lastAttackName == "Spinning Wheel Kick") return true;
        break;
      case "OUT065": case "OUT066": case "OUT067":
        if($lastAttackName == "Twin Twisters") return true;
        break;
      case "OUT074": case "OUT075": case "OUT076":
        if($lastAttackName == "Surging Strike") return true;
        break;
      case "OUT080": case "OUT081": case "OUT082":
        if($lastAttackName == "Head Jab") return true;
        break;
      case "TCC088":
        if($lastAttackName == "Crouching Tiger") return true;
        break;
      default: break;
    }
  }
  return false;
}

function HasBloodDebt($cardID)
{
  switch($cardID) {
    case "MON123"; case "MON124"; case "MON125"; case "MON126": case "MON127": case "MON128"; case "MON129":
    case "MON130": case "MON131"; case "MON135": case "MON136": case "MON137"; case "MON138": case "MON139":
    case "MON140"; case "MON141": case "MON142": case "MON143"; case "MON144": case "MON145": case "MON146";
    case "MON147": case "MON148": case "MON149"; case "MON156": case "MON158": case "MON159": case "MON160":
    case "MON161": case "MON165": case "MON166": case "MON167": case "MON168": case "MON169": case "MON170":
    case "MON171": case "MON172": case "MON173": case "MON174": case "MON175": case "MON176": case "MON177":
    case "MON178": case "MON179": case "MON180": case "MON181": case "MON182": case "MON183": case "MON184":
    case "MON185": case "MON187": case "MON191": case "MON192": case "MON194": case "MON200": case "MON201":
    case "MON202": case "MON203": case "MON204": case "MON205": case "MON209": case "MON210": case "MON211":
    case "DTD105": case "DTD106": case "DTD107": case "DTD108": case "DTD109":
    case "DTD112": case "DTD113": case "DTD114":
    case "DTD115": case "DTD116": case "DTD117":
    case "DTD121": case "DTD122": case "DTD123":
    case "DTD124": case "DTD125": case "DTD126":
    case "DTD127": case "DTD128": case "DTD129":
    case "DTD130": case "DTD131": case "DTD132": case "DTD136":
    case "DTD137": case "DTD138": case "DTD139": case "DTD140": case "DTD141":
    case "DTD143": case "DTD144": case "DTD145":
    case "DTD146": case "DTD147": case "DTD148":
    case "DTD152": case "DTD153": case "DTD154":
    case "DTD155": case "DTD156": case "DTD157":
    case "DTD158": case "DTD159": case "DTD160":
    case "DTD161": case "DTD162": case "DTD163":
    case "DTD165": case "DTD166": case "DTD167": case "DTD168":
    case "DTD169": case "DTD170": case "DTD171":
    case "DTD172": case "DTD173": case "DTD174":
    case "DTD175": case "DTD176": case "DTD177":
    case "DTD178": case "DTD179": case "DTD180":
    case "DTD181": case "DTD182": case "DTD183":
    case "DTD184": case "DTD185": case "DTD186":
      return true;
    default: return false;
  }
}

function HasRunegate($cardID)
{
  switch($cardID)
  {
    case "DTD137": case "DTD138": case "DTD139":
    case "DTD143": case "DTD144": case "DTD145":
    case "DTD146": case "DTD147": case "DTD148":
    case "DTD152": case "DTD153": case "DTD154":
    case "DTD155": case "DTD156": case "DTD157":
    case "DTD158": case "DTD159": case "DTD160":
      return true;
    default: return false;
  }
}

function PlayableFromBanish($cardID, $mod="", $nonLimitedOnly=false)
{
  global $currentPlayer, $CS_NumNonAttackCards, $CS_Num6PowBan;
  $mod = explode("-", $mod)[0];
  if($mod == "INT") return false;
  if($mod == "TCL" || $mod == "TT" || $mod == "TCC" || $mod == "NT" || $mod == "INST" || $mod == "MON212" || $mod == "ARC119") return true;
  if(HasRunegate($cardID) && SearchCount(SearchAurasForCard("ARC112", $currentPlayer, false)) >= CardCost($cardID)) return true;
  $char = &GetPlayerCharacter($currentPlayer);
  if(SubtypeContains($cardID, "Evo") && ($char[0] == "TCC001" || $char[0] == "EVO007" || $char[0] == "EVO008")) return true;
  switch($cardID) {
    case "MON123": return GetClassState($currentPlayer, $CS_Num6PowBan) > 0;
    case "MON156": case "MON158": return true;
    case "MON159": case "MON160": case "MON161": return GetClassState($currentPlayer, $CS_NumNonAttackCards) > 0;
    case "MON165": case "MON166": case "MON167": return true;
    case "MON168": case "MON169": case "MON170": return GetClassState($currentPlayer, $CS_NumNonAttackCards) > 0;
    case "MON171": case "MON172": case "MON173": return true;
    case "MON174": case "MON175": case "MON176": return true;
    case "MON177": case "MON178": case "MON179": return true;
    case "MON180": case "MON181": case "MON182": return true;
    case "MON183": case "MON184": case "MON185": return true;
    case "MON190": case "MON191": case "MON194": case "MON200": case "MON201": case "MON202": case "MON203":
    case "MON204": case "MON205": case "MON209": case "MON210": case "MON211": return true;
    case "DTD141":
    case "DTD161": case "DTD162": case "DTD163":
    case "DTD175": case "DTD176": case "DTD177":
    case "DTD140": case "DTD170": case "DTD171": return true;
    case "DTD172": case "DTD173": case "DTD174":
      $soul = &GetSoul($currentPlayer == 1 ? 2 : 1);
      return count($soul) > 0;
    case "DTD178": case "DTD179": case "DTD180": return true;
    default: break;
  }
  if($nonLimitedOnly) return false;
  if($char[0] == "DTD564" && SearchCurrentTurnEffects("DTD564", $currentPlayer) && HasBloodDebt($cardID)) return true;
  return false;
}

function AbilityPlayableFromBanish($cardID)
{
  global $currentPlayer, $mainPlayer;
  switch($cardID) {
    case "MON192": return $currentPlayer == $mainPlayer;
    default: return false;
  }
}

function RequiresDieRoll($cardID, $from, $player)
{
  global $turn;
  if(GetDieRoll($player) > 0) return false;
  if($turn[0] == "B") return false;
  $type = CardType($cardID);
  if($type == "AA" && AttackValue($cardID) >= 6 && (SearchCharacterActive($player, "CRU002") || SearchCurrentTurnEffects("CRU002-SHIYANA", $player))) return true;
  switch($cardID) {
    case "WTR004": case "WTR005": case "WTR010": return true;
    case "WTR162": return $from == "PLAY";
    case "CRU009": return true;
    case "EVR004": return true;
    case "EVR014": case "EVR015": case "EVR016": return true;
  }
  return false;
}

function SpellVoidAmount($cardID, $player)
{
  if($cardID == "ARC112" && SearchCurrentTurnEffects("DYN171", $player)) return 1;
  switch($cardID) {
    case "ELE173": return 2;
    case "MON061": return 2;
    case "MON090": return 1;
    case "MON188": return 2;
    case "MON302": return 1;
    case "MON400": return 1;
    case "MON401": return 1;
    case "MON402": return 1;
    case "DYN236": case "DYN237": case "DYN238": case "DYN239": return 1;
		case "DYN246": return 1;
    default: return 0;
  }
}

function IsSpecialization($cardID)
{
  switch($cardID) {
    case "WTR006": case "WTR009": case "WTR043": case "WTR047": case "WTR081": case "WTR083": case "WTR119": case "WTR121":
    case "ARC007": case "ARC009": case "ARC043": case "ARC046": case "ARC080": case "ARC083": case "ARC118": case "ARC121":
    case "CRU000": case "CRU074":
    case "MON005": case "MON007": case "MON035": case "MON189": case "MON190": case "MON198": case "MON199":
    case "ELE004": case "ELE036": case "ELE066":
    case "EVR003": case "EVR039": case "EVR055": case "EVR070":
    case "DVR008": case "RVD008": return true;
    case "UPR090": case "UPR091": case "UPR109": case "UPR126":
    case "DYN121":
    case "OUT013": case "OUT053": case "OUT055": case "OUT097": case "OUT098": case "OUT102": case "OUT103": case "OUT104": return true;
    default:
      return false;
  }
}

function Is1H($cardID)
{
  return GeneratedIs1H($cardID);
}

function AbilityPlayableFromCombatChain($cardID)
{
  switch($cardID) {
    case "MON245":
    case "MON281": case "MON282": case "MON283":
    case "ELE195": case "ELE196": case "ELE197":
    case "EVR157":
      return true;
    default: return false;
  }
}

function CardCaresAboutPitch($cardID)
{
  $cardID = ShiyanaCharacter($cardID);
  switch($cardID) {
    case "ELE001": case "ELE002": case "ELE003":
    case "DYN172": case "DYN173": case "DYN174":
    case "DYN176": case "DYN177": case "DYN178":
		case "DYN182": case "DYN183": case "DYN184":
		case "DYN185": case "DYN186": case "DYN187":
      return true;
    default: return false;
  }
}

function CardHasAltArt($cardID)
{
  switch($cardID) {
    case "WTR002": case "WTR150": case "WTR162":
    case "WTR224":
      return true;
    case "MON155": case "MON215": case "MON216":
    case "MON217": case "MON219": case "MON220":
      return true;
    case "ELE146":
      return true;
    case "UPR006": case "UPR007": case "UPR008":
    case "UPR009": case "UPR010": case "UPR011":
    case "UPR012": case "UPR013": case "UPR014":
    case "UPR015": case "UPR016": case "UPR017":
      return true;
    case "UPR042": case "UPR043": case "UPR169":
      return true;
    case "UPR406": case "UPR407": case "UPR408":
    case "UPR409": case "UPR410": case "UPR411":
    case "UPR412": case "UPR413": case "UPR414":
    case "UPR415": case "UPR416": case "UPR417":
      return true;
    case "DYN234":
      return true;
  default:
      return false;
  }
}

function IsIyslander($character)
{
  switch($character) {
    case 'EVR120': case 'UPR102': case 'UPR103': return true;
    default: return false;
  }
}

function WardAmount($cardID, $player)
{
  switch($cardID)
  {
    case "DYN213": case "DYN214": return 1;
    case "DYN612": return 4;
    case "DTD004": return SearchCurrentTurnEffects("DTD004-1", $player);
    case "DTD217": return 2;
    case "DTD405": case "DTD406": case "DTD407": case "DTD408"://Angels
    case "DTD409": case "DTD410": case "DTD411": case "DTD412": return 4;
    default: return 0;
  }
}

function HasWard($cardID, $player)
{
  switch($cardID) {
    case "MON103":
    case "UPR039": case "UPR040": case "UPR041":
    case "UPR218": case "UPR219": case "UPR220":
    case "DYN213":
    case "DYN214": case "DYN215": case "DYN217":
    case "DYN218": case "DYN219": case "DYN220":
    case "DYN221": case "DYN222": case "DYN223":
    case "DYN612":
      return true;
    case "DTD004": return SearchCurrentTurnEffects("DTD004-1", $player);
    case "DTD217":
    case "DTD405": case "DTD406": case "DTD407": case "DTD408"://Angels
    case "DTD409": case "DTD410": case "DTD411": case "DTD412":
      return true;
    default: return false;
  }
}

function HasDominate($cardID)
{
  global $mainPlayer, $combatChainState;
  global $CS_NumAuras, $CCS_NumBoosted;
  switch($cardID)
  {
    case "WTR095": case "WTR096": case "WTR097": return (ComboActive() ? true : false);
    case "WTR179": case "WTR180": case "WTR181": return true;
    case "ARC080": return true;
    case "MON004": return true;
    case "MON023": case "MON024": case "MON025": return true;
    case "MON246": return SearchDiscard($mainPlayer, "AA") == "";
    case "MON275": case "MON276": case "MON277": return true;
    case "ELE209": case "ELE210": case "ELE211": return HasIncreasedAttack();
    case "EVR027": case "EVR028": case "EVR029": return true;
    case "EVR038": return (ComboActive() ? true : false);
    case "EVR076": case "EVR077": case "EVR078": return $combatChainState[$CCS_NumBoosted] > 0;
    case "EVR110": case "EVR111": case "EVR112": return GetClassState($mainPlayer, $CS_NumAuras) > 0;
    case "OUT027": case "OUT028": case "OUT029": return true;
    default: break;
  }
  return false;
}

function CanCostBeModified($cardID)
{
  switch($cardID) {
    case "DTD201": return false;
    default: return true;
  }
}

function CanBlockBeModified($cardID)
{
  switch($cardID) {
    case "DTD201": return false;
    default: return true;
  }
}

function Rarity($cardID)
{
  $set = CardSet($cardID);
  if($set != "ROG" && $set != "DUM") {
    return GeneratedRarity($cardID);
  }
  if($set == "ROG") {
    return ROGUERarity($cardID);
  }
}
