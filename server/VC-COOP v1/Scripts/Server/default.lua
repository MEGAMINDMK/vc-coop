function onServerStart()
	print("TDCS v Coop Started")

	local modelID = 226
	local randColorA = GetRandomVehicleColor()
	local randColorB = GetRandomVehicleColor()
	
	--AddVehicle(modelID, 538.117798, 626.908203, 10.901563, randColorA, randColorB)
end
function onPlayerConnect(id)
	print("Player "..GetPlayerName(id).. " joined!")

    SetPlayerModel(id, 94) --biker
    SetPlayerHealth(id, 100) -- health
    SetPlayerArmour(id, 100) -- armour
	--GivePlayerWeapon(id, 26, 1000) -- m4
	GivePlayerWeapon(id, 20, 1000) -- spaz

end
function onPlayerMessage(playerid, msg)
	local playerName = GetPlayerName(playerid);
	local matchText = string.match(msg, "/cmd (%d+)")
	
	if (matchText) then
		print(playerName.." sent "..matchText)
	end
end
