import wx
from blockwindow import BlockWindow

"""
The GridBagSizer also lays out items in a virtual grid, but in this
case items are positioned at the 'cell' specified in the Add method.
This means that the order that items are added is not significant as
with the other sizers.
"""

labels = "one two three four five six seven eight nine".split()

class TestFrame(wx.Frame):
    def __init__(self):
        wx.Frame.__init__(self, None, -1, "GridBagSizer Test")

        # Create the sizer
        sizer = wx.GridBagSizer(hgap=5, vgap=5)

        # Create some block windows in a basic grid
        for col in range(3):
            for row in range(3):
                bw = BlockWindow(self, label=labels[row*3 + col])
                sizer.Add(bw, pos=(row,col))

        # add a window that spans several rows
        bw = BlockWindow(self, label="span 3 rows")
        sizer.Add(bw, pos=(0,3), span=(3,1), flag=wx.EXPAND)

        # add a window that spans all columns
        bw = BlockWindow(self, label="span all columns")
        sizer.Add(bw, pos=(3,0), span=(1,4), flag=wx.EXPAND)

        # make the last row and col be stretchable
        sizer.AddGrowableCol(3)
        sizer.AddGrowableRow(3)

        # Tell this window to use the sizer for layout
        self.SetSizer(sizer)

        # Change the size of the window to be the minimum
        # needed by the sizer
        self.Fit()
        

app = wx.PySimpleApp()

frame1 = TestFrame()
frame1.Show()

app.MainLoop()
