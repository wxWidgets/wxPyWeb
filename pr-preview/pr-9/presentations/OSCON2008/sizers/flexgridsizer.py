import wx
from blockwindow import BlockWindow

"""
A FlexGridSizer is basically the same as a GridSizer, except not all
cells are the same size.  A cell is as wide as the widest item in that
column and as high as the tallest item in that row.  Additionally,
rows and columns are not stretchable by default, but you can specify
which rows and columns should stretch when there is additional space
available.
"""

labels = "one two three four five six seven eight nine".split()

class TestFrame(wx.Frame):
    def __init__(self, makeLarger=False, useExpand=False):
        wx.Frame.__init__(self, None, -1, "FlexGridSizer Test")

        if useExpand:
            flag = wx.EXPAND
        else:
            flag = 0

        # Create the sizer
        sizer = wx.FlexGridSizer(rows=3, cols=3, hgap=5, vgap=5)

        # Create some block windows
        for label in labels:
            bw = BlockWindow(self, label=label)
            sizer.Add(bw, 0, flag)

        if makeLarger:
            center = self.FindWindowByName("five")
            center.SetMinSize((150,50))
            sizer.AddGrowableCol(1)
            sizer.AddGrowableRow(1)

        # Tell this window to use the sizer for layout
        self.SetSizer(sizer)

        # Change the size of the window to be the minimum
        # needed by the sizer
        self.Fit()


app = wx.PySimpleApp()

frame1 = TestFrame()
frame1.Show()
frame2 = TestFrame(True)
frame2.Show()
frame3 = TestFrame(True, True)
frame3.Show()

app.MainLoop()
